<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	
	//Ejemplo completo de como parametrizar las consultas en Cake
	/*
	 * array(
	 'conditions' => array('Model.field' => $thisValue), //array of conditions
			'recursive' => 1, //int
			'fields' => array('Model.field1', 'DISTINCT Model.field2'), //array of field names
			'order' => array('Model.created', 'Model.field3 DESC'), //string or array defining order
			'group' => array('Model.field'), //fields to GROUP BY
			'limit' => n, //int
			'page' => n, //int
			'offset' => n, //int
			'callbacks' => true //other possible values are false, 'before', 'after'
	)*/
	
	
	
	private $userid = null;
	private $bPrimera = null;
	
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}
	
	
	public function home(){
		
		if($this->bPrimera == true) {
			$this->Session->setFlash('Una anIddea la primera vez que logueas');			
		} else {
			if (!$this->User->findById($this->Auth->user('id'))) {
					
				throw new NotFoundException(__('Invalid user'));
			}
		}
		$optionsUsr = array('conditions' => array('User.' . $this->User->primaryKey => $this->Session->read('usrid')));
		
		$user = $this->User->find('first', $optionsUsr);
		$this->set('user');
	}
	
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->User->create();
			$this->User->set('ultimo_login',date('c'));
			$this->User->set('fecha_registro',date('c'));
			$mail = $this->request->data['User']['username'];
			if($this->fExisteMail($mail) == false)
			{
				$this->Session->setFlash(__('El mail ya existe. Leñe.'));
			}
			else
			{
				if ($this->User->save($this->request->data)) {
					$this->User->Profile->create();
					$this->User->Profile->set('user_id',$this->User->id);
					$this->User->Profile->save();
					$this->Session->setFlash(__('Bienvenido. Toma un anIddea'));
					$this->redirect($this->Auth->redirectUrl());
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}
		}
		else
		{
			if($this->Auth->user('id') !== null) {
				//$this->Session->setFlash(implode(",",$this->Auth->user('Profile')));
				$this->redirect($this->Auth->redirect());
			}
		}
	}

	public function fExisteMail($mail)
	{
		$mail2 = $this->User->find('first',array(
				'conditions' => array('User.username' => $mail)));
		if(isset($mail2) === false)
		{
			return false;
		}
		return true;
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if($this->User->id !== $this->Auth->user('id)'))
		{
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}			
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
		}
		else
		{
			$this->Session->setFlash('No se pueden editar otros usuarios');
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->User->set('ultimo_login',date('c'));
				$this->Session->setFlash(__('Has pasado, a donde vas....'));
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
	}
	
	public function logout() {
		$this->redirect($this->Auth->logout());
	}
}
