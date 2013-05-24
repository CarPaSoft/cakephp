<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $components = array(
			'Session',
			'Auth' => array(
					'loginAction' => array('controller' => 'pages', 'action' => 'home'),
					'loginRedirect' => array('controller' => 'profiles', 'action' => 'home'),
					'logoutRedirect' => array('controller' => 'pages', 'action' => 'home')
			),
			'RequestHandler'
	);
	
	/*
	array(
    'conditions' => array('Model.field' => $thisValue), //array of conditions
    'recursive' => 1, //int
    'fields' => array('Model.field1', 'DISTINCT Model.field2'), //array of field names
    'order' => array('Model.created', 'Model.field3 DESC'), //string or array defining order
    'group' => array('Model.field'), //fields to GROUP BY
    'limit' => n, //int
    'page' => n, //int
    'offset' => n, //int
    'callbacks' => true //other possible values are false, 'before', 'after'
	*/
	
	public function beforeFilter() {
		$this->Auth->allow('home');
	}
	
	public function beforeRender()
	{
		if($this->Auth->user('id') == false)
		{
			
		}
		else
		{
			//hacemos todo el tema que tengamos que hacer por el usuario
			//mensajes, relacionados, proyectos y actualizaciones en 
			//general de su barra de estado
			
			$this->loadModel('Cnvrstn');
			
			$prfl = $this->Cnvrstn->Profile->find('first',array('conditions' => array('Profile.user_id' => $this->Auth->user('id')),'fields' => array('id')));
			$prflId = $prfl['Profile']['id'];
			/*$prfl = $this->Cnvrstn->find('threaded', array(
        	'fields' => array('id', 'name', 'parent_id')));*/
			//echo json_encode( $prfl);
			$this->Cnvrstn->Cnvrstusrs->find('all',array('conditions' => array('Cnvrstnusr.profile_id' => $prflId)));
			
			$recentArticles = $this->Cnvrstn->find('threaded', array('conditions' => array('Cnvrstn.profile_id' => $prflId)
														,'limit' => 5, 'order' => 'Cnvrstn.created DESC'));
			echo json_encode( $recentArticles);
			$this->set(compact('recentArticles'));
		}
	}
	
}
