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
			//$cnvrstn = new Cnvrstn();
			//$cnvrstn->findByProfileId();
			$this->loadModel('Cnvrstn');
			$recentArticles = $this->Cnvrstn->find('all', array('limit' => 5, 'order' => 'Cnvrstn.created DESC'));
			$this->set(compact('recentArticles'));
		}
	}
	
}
