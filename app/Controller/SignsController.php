<?php
App::uses('AppController', 'Controller');
/**
 * Signs Controller
 *
 * @property Sign $Sign
 */
class SignsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sign->recursive = 0;
		$this->set('signs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sign->exists($id)) {
			throw new NotFoundException(__('Invalid sign'));
		}
		$options = array('conditions' => array('Sign.' . $this->Sign->primaryKey => $id));
		$this->set('sign', $this->Sign->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sign->create();
			if ($this->Sign->save($this->request->data)) {
				$this->Session->setFlash(__('The sign has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign could not be saved. Please, try again.'));
			}
		}
		$signTypes = $this->Sign->SignType->find('list');
		$this->set(compact('signTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Sign->exists($id)) {
			throw new NotFoundException(__('Invalid sign'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sign->save($this->request->data)) {
				$this->Session->setFlash(__('The sign has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sign.' . $this->Sign->primaryKey => $id));
			$this->request->data = $this->Sign->find('first', $options);
		}
		$signTypes = $this->Sign->SignType->find('list');
		$this->set(compact('signTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Sign->id = $id;
		if (!$this->Sign->exists()) {
			throw new NotFoundException(__('Invalid sign'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sign->delete()) {
			$this->Session->setFlash(__('Sign deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sign was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Sign->recursive = 0;
		$this->set('signs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Sign->exists($id)) {
			throw new NotFoundException(__('Invalid sign'));
		}
		$options = array('conditions' => array('Sign.' . $this->Sign->primaryKey => $id));
		$this->set('sign', $this->Sign->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Sign->create();
			if ($this->Sign->save($this->request->data)) {
				$this->Session->setFlash(__('The sign has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign could not be saved. Please, try again.'));
			}
		}
		$signTypes = $this->Sign->SignType->find('list');
		$this->set(compact('signTypes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Sign->exists($id)) {
			throw new NotFoundException(__('Invalid sign'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sign->save($this->request->data)) {
				$this->Session->setFlash(__('The sign has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Sign.' . $this->Sign->primaryKey => $id));
			$this->request->data = $this->Sign->find('first', $options);
		}
		$signTypes = $this->Sign->SignType->find('list');
		$this->set(compact('signTypes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Sign->id = $id;
		if (!$this->Sign->exists()) {
			throw new NotFoundException(__('Invalid sign'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sign->delete()) {
			$this->Session->setFlash(__('Sign deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sign was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
