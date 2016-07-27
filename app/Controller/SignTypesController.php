<?php
App::uses('AppController', 'Controller');
/**
 * SignTypes Controller
 *
 * @property SignType $SignType
 */
class SignTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SignType->recursive = 0;
		$this->set('signTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SignType->exists($id)) {
			throw new NotFoundException(__('Invalid sign type'));
		}
		$options = array('conditions' => array('SignType.' . $this->SignType->primaryKey => $id));
		$this->set('signType', $this->SignType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SignType->create();
			if ($this->SignType->save($this->request->data)) {
				$this->Session->setFlash(__('The sign type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SignType->exists($id)) {
			throw new NotFoundException(__('Invalid sign type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SignType->save($this->request->data)) {
				$this->Session->setFlash(__('The sign type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SignType.' . $this->SignType->primaryKey => $id));
			$this->request->data = $this->SignType->find('first', $options);
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
		$this->SignType->id = $id;
		if (!$this->SignType->exists()) {
			throw new NotFoundException(__('Invalid sign type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SignType->delete()) {
			$this->Session->setFlash(__('Sign type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sign type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SignType->recursive = 0;
		$this->set('signTypes', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SignType->exists($id)) {
			throw new NotFoundException(__('Invalid sign type'));
		}
		$options = array('conditions' => array('SignType.' . $this->SignType->primaryKey => $id));
		$this->set('signType', $this->SignType->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SignType->create();
			if ($this->SignType->save($this->request->data)) {
				$this->Session->setFlash(__('The sign type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign type could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SignType->exists($id)) {
			throw new NotFoundException(__('Invalid sign type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SignType->save($this->request->data)) {
				$this->Session->setFlash(__('The sign type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SignType.' . $this->SignType->primaryKey => $id));
			$this->request->data = $this->SignType->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SignType->id = $id;
		if (!$this->SignType->exists()) {
			throw new NotFoundException(__('Invalid sign type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SignType->delete()) {
			$this->Session->setFlash(__('Sign type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sign type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
