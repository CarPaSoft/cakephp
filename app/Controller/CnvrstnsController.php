<?php
App::uses('AppController', 'Controller');
/**
 * Cnvrstns Controller
 *
 * @property Cnvrstn $Cnvrstn
 */
class CnvrstnsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cnvrstn->recursive = 0;
		$this->set('cnvrstns', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cnvrstn->exists($id)) {
			throw new NotFoundException(__('Invalid cnvrstn'));
		}
		$options = array('conditions' => array('Cnvrstn.' . $this->Cnvrstn->primaryKey => $id));
		$this->set('cnvrstn', $this->Cnvrstn->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	
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
)
*/
	
	public function add() {
		if ($this->request->is('post')) {
			$cnvrstnId;
			$prflId;
			$perfil = $this->Cnvrstn->Profile->find('first',array('conditions' => array('Profile.user_id' => $this->Auth->user('id')),'fields' => array('Profile.id')));
			$prflId = $perfil['Profile']['id'];
			$date = date("Y-m-d H:i:s");
			$this->Cnvrstn->create();
			
			$data = array('profile_id' => $prflId,
			'title' => $this->request->data('Cnvrstn.title'),
			'created' => $date,
			'allowadd' => true,
			'count' => 1);
			$fieldList = array('profile_id','title','created','allowadd','count');
			if ($this->Cnvrstn->save($data,false,$fieldList))
			{
				
				$cnvrstnId = $this->Cnvrstn->id;
				//ahora salvamos los usuarios de la conversacion
				$data = array('cnvrstn_id' => $cnvrstnId,
							'profile_id' => $prflId,
							'status' => 0,
							'lastview' => 1,
							'created' => $date);
				$fieldList = array('cnvrstn_id','profile_id','status','lastview','created');
				$this->Cnvrstn->Cnvrstnusr->create();
				if($this->Cnvrstn->Cnvrstnusr->save($data,false,$fieldList))
				{
					//Creamos un nuevo Cnvrstnusr para el destinatario
					$this->Cnvrstn->Cnvrstnusr->create();
					$data = array('cnvrstn_id' => $cnvrstnId,
							'profile_id' => $this->request->data('Cnvrstn.profile_id'),
							'status' => 0,
							'lastview' => 1,
							'created' => $date);
					if($this->Cnvrstn->Cnvrstnusr->save($data,false,$fieldList))
					{
						$success = true;
					}
					else
					{
						$success = false;
					}
				}
				if($success == true)
				{
					//ahora es el turno de el mensaje inicial
					$data = array('cnvrstn_id' => $cnvrstnId,
							'profile_id' => $prflId,
							'message' => $this->request->data('Cnvrstn.message'),
							'created' => date("Y-m-d H:i:s"));
					$fieldList = array('cnvrstn_id','profile_id','message','created');
					$this->Cnvrstn->Cnvrstnmssg->create();
					
					if($this->Cnvrstn->Cnvrstnmssg->save($data,false,$fieldList))
					{
						$this->Cnvrstn->saveField('lastmessageid', $this->Cnvrstn->Cnvrstnmssg->id);
						$this->Session->setFlash(__('Conversación entablada') . "!");
						$this->redirect(array('controller' => 'profiles', 'action' => 'home'));
					}
					else 
					{
						//hay que añadir un callback o algo para si falla aquí borrar la cnvrstn entera
						$this->Session->setFlash(__('The cnvrstn could not be saved. Please, try again.'));
					}
				}
				else
				{
					//hay que añadir un callback o algo para si falla aquí borrar la cnvrstn entera
					$this->Session->setFlash(__('The cnvrstn could not be saved. Please, try again.'));
				}
			} 
			else 
			{
				$this->Session->setFlash(__('The cnvrstn could not be saved. Please, try again.'));
			}
		}
		$profiles = $this->Cnvrstn->Profile->find('list');
		$this->set(compact('profiles'));
	}

	public function create()
	{
		$this->Cnvrstn->create();

		$this->Cnvrstn->Cnvrstnmssg->create();
		
	}
	
	
	
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cnvrstn->exists($id)) {
			throw new NotFoundException(__('Invalid cnvrstn'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cnvrstn->save($this->request->data)) {
				$this->Session->setFlash(__('The cnvrstn has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cnvrstn could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cnvrstn.' . $this->Cnvrstn->primaryKey => $id));
			$this->request->data = $this->Cnvrstn->find('first', $options);
		}
		$profiles = $this->Cnvrstn->Profile->find('list');
		$this->set(compact('profiles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cnvrstn->id = $id;
		if (!$this->Cnvrstn->exists()) {
			throw new NotFoundException(__('Invalid cnvrstn'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cnvrstn->delete()) {
			$this->Session->setFlash(__('Cnvrstn deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cnvrstn was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
