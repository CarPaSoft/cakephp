<?php
App::uses('AppController', 'Controller');
/**
 * Cnvrstnusrs Controller
 *
 * @property Cnvrstnusr $Cnvrstnusr
 */
class CnvrstnusrsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Cnvrstnusr->recursive = 0;
		$this->set('cnvrstnusrs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cnvrstnusr->exists($id)) {
			throw new NotFoundException(__('Invalid cnvrstnusr'));
		}
		$options = array('conditions' => array('Cnvrstnusr.' . $this->Cnvrstnusr->primaryKey => $id));
		$this->set('cnvrstnusr', $this->Cnvrstnusr->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cnvrstnusr->create();
			if ($this->Cnvrstnusr->save($this->request->data)) {
				$this->flash(__('Cnvrstnusr saved.'), array('action' => 'index'));
			} else {
			}
		}
		$profiles = $this->Cnvrstnusr->Profile->find('list');
		$this->set(compact('profiles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cnvrstnusr->exists($id)) {
			throw new NotFoundException(__('Invalid cnvrstnusr'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cnvrstnusr->save($this->request->data)) {
				$this->flash(__('The cnvrstnusr has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$options = array('conditions' => array('Cnvrstnusr.' . $this->Cnvrstnusr->primaryKey => $id));
			$this->request->data = $this->Cnvrstnusr->find('first', $options);
		}
		$profiles = $this->Cnvrstnusr->Profile->find('list');
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
		$this->Cnvrstnusr->id = $id;
		if (!$this->Cnvrstnusr->exists()) {
			throw new NotFoundException(__('Invalid cnvrstnusr'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cnvrstnusr->delete()) {
			$this->flash(__('Cnvrstnusr deleted'), array('action' => 'index'));
		}
		$this->flash(__('Cnvrstnusr was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
