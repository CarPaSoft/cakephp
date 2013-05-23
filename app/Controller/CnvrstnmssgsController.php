<?php
App::uses('AppController', 'Controller');
/**
 * Cnvrstnmssgs Controller
 *
 * @property Cnvrstnmssg $Cnvrstnmssg
 */
class CnvrstnmssgsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cnvrstnmssg->recursive = 0;
		$this->set('cnvrstnmssgs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cnvrstnmssg->exists($id)) {
			throw new NotFoundException(__('Invalid cnvrstnmssg'));
		}
		$options = array('conditions' => array('Cnvrstnmssg.' . $this->Cnvrstnmssg->primaryKey => $id));
		$this->set('cnvrstnmssg', $this->Cnvrstnmssg->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cnvrstnmssg->create();
			if ($this->Cnvrstnmssg->save($this->request->data)) {
				$this->Session->setFlash(__('The cnvrstnmssg has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cnvrstnmssg could not be saved. Please, try again.'));
			}
		}
		$cnvrstns = $this->Cnvrstnmssg->Cnvrstn->find('list');
		$cnvrstnusrs = $this->Cnvrstnmssg->Cnvrstnusr->find('list');
		$this->set(compact('cnvrstns', 'cnvrstnusrs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cnvrstnmssg->exists($id)) {
			throw new NotFoundException(__('Invalid cnvrstnmssg'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cnvrstnmssg->save($this->request->data)) {
				$this->Session->setFlash(__('The cnvrstnmssg has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cnvrstnmssg could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cnvrstnmssg.' . $this->Cnvrstnmssg->primaryKey => $id));
			$this->request->data = $this->Cnvrstnmssg->find('first', $options);
		}
		$cnvrstns = $this->Cnvrstnmssg->Cnvrstn->find('list');
		$cnvrstnusrs = $this->Cnvrstnmssg->Cnvrstnusr->find('list');
		$this->set(compact('cnvrstns', 'cnvrstnusrs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cnvrstnmssg->id = $id;
		if (!$this->Cnvrstnmssg->exists()) {
			throw new NotFoundException(__('Invalid cnvrstnmssg'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cnvrstnmssg->delete()) {
			$this->Session->setFlash(__('Cnvrstnmssg deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cnvrstnmssg was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
