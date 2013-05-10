<?php
App::uses('AppController', 'Controller');
/**
 * Profiles Controller
 *
 * @property Profile $Profile
 */
class ProfilesController extends AppController {

	
	//Ejemplo completo de como parametrizar las consultas en Cake
		/*array(
			    'conditions' => array('Model.field' => $thisValue), //array of conditions
			    'recursive' => 1, //int
			    'fields' => array('Model.field1', 'DISTINCT Model.field2'), //array of field names
			    'order' => array('Model.created', 'Model.field3 DESC'), //string or array defining order
			    'group' => array('Model.field'), //fields to GROUP BY
			-    'limit' => n, //int
			-    'page' => n, //int
			-    'offset' => n, //int
			-    'callbacks' => true //other possible values are false, 'before', 'after'
			-	)*/
	
	public function pruebaAjax($id = null,$apellido = null, $accion = null)
	{
		$prfl = $this->Profile->find('first',array('conditions' => array('Profile.user_id' => $this->Auth->user('id'))));
		
		
		$lola = "<input type='text' class='txtApellidos' value='". $prfl['Profile']['apellidos'] ."'> <img src='http://localhost:8080/cakephp/img/test-pass-icon.png' />";
		$this->layout = "ajax";	
		echo $lola;
		
	}
	
	public function home()
	{
		$id = $this->Auth->user('id');
		
		if (!$this->Profile->User->exists($id)) {
			throw new NotFoundException(__('Invalid profile' . $id));
		}
		else
		{
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->Profile->save($this->request->data)) {
					$this->Session->setFlash(__('The profile has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The profile could not be saved. Please, try again.'));
				}
			}
			
			$options = array('conditions' => array('Profile.user_id' => $id));
			$skills = $this->Profile->Prflsskll->find('all',
					array(
							'conditions' => array('Profile.user_id' => $id),
							'fields' => array('Prflsskll.level','Skill.nombre')
						)
					);
			$languages = $this->Profile->Lngsprf->find('all',
					array(
							'conditions' => array('Profile.user_id' => $id),
							'fields' => 'Lngsprf.level','Languages.nombre'
						)
					);
			$projects = $this->Profile->Prflsprjct->find('all',
					array(
							'conditions' => array('Profile.user_id' => $id),
							'fields' => 'Prflsprjct.owner','Project.nombre'
						)
					);
			$this->set('related', compact('skills','languages','projects'));
			$this->set('profile', $this->Profile->find('first', $options));
		}
	}
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Profile->recursive = 0;
		$this->set('profiles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		
		
		
		
		$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
		$profile = $this->Profile->find('threaded', $options);
		$this->set(compact('profile','skills'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profile->create();
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.'));
			}
		}
		$users = $this->Profile->User->find('list');
		$cities = $this->Profile->City->find('list');
		$countries = $this->Profile->Country->find('list');
		$jobs = $this->Profile->Job->find('list');
		$this->set(compact('users', 'cities', 'countries', 'jobs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profile->exists($id)) {
			throw new NotFoundException(__('Invalid profile'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Profile->save($this->request->data)) {
				$this->Session->setFlash(__('The profile has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profile.' . $this->Profile->primaryKey => $id));
			$this->request->data = $this->Profile->find('first', $options);
		}
		$users = $this->Profile->User->find('list');
		$cities = $this->Profile->City->find('list');
		$countries = $this->Profile->Country->find('list');
		$jobs = $this->Profile->Job->find('list');
		
		$this->set(compact('users', 'cities', 'countries', 'jobs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Profile->id = $id;
		if (!$this->Profile->exists()) {
			throw new NotFoundException(__('Invalid profile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profile->delete()) {
			$this->Session->setFlash(__('Profile deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Profile was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
