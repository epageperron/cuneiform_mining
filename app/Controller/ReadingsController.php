<?php
App::uses('AppController', 'Controller');
/**
 * Readings Controller
 *
 * @property Reading $Reading
 */
class ReadingsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reading->recursive = 0;
		$this->set('readings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reading->exists($id)) {
			throw new NotFoundException(__('Invalid reading'));
		}
		$options = array('conditions' => array('Reading.' . $this->Reading->primaryKey => $id));
		$this->set('reading', $this->Reading->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reading->create();
			if ($this->Reading->save($this->request->data)) {
				$this->Session->setFlash(__('The reading has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reading could not be saved. Please, try again.'));
			}
		}
		$signs = $this->Reading->Sign->find('list');
		$tablets = $this->Reading->Tablet->find('list');
		$this->set(compact('signs', 'tablets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reading->exists($id)) {
			throw new NotFoundException(__('Invalid reading'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reading->save($this->request->data)) {
				$this->Session->setFlash(__('The reading has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reading could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reading.' . $this->Reading->primaryKey => $id));
			$this->request->data = $this->Reading->find('first', $options);
		}
		$signs = $this->Reading->Sign->find('list');
		$tablets = $this->Reading->Tablet->find('list');
		$this->set(compact('signs', 'tablets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reading->id = $id;
		if (!$this->Reading->exists()) {
			throw new NotFoundException(__('Invalid reading'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reading->delete()) {
			$this->Session->setFlash(__('Reading deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reading was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Reading->recursive = 0;
		$this->set('readings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Reading->exists($id)) {
			throw new NotFoundException(__('Invalid reading'));
		}
		$options = array('conditions' => array('Reading.' . $this->Reading->primaryKey => $id));
		$this->set('reading', $this->Reading->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Reading->create();
			if ($this->Reading->save($this->request->data)) {
				$this->Session->setFlash(__('The reading has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reading could not be saved. Please, try again.'));
			}
		}
		$signs = $this->Reading->Sign->find('list');
		$tablets = $this->Reading->Tablet->find('list');
		$this->set(compact('signs', 'tablets'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Reading->exists($id)) {
			throw new NotFoundException(__('Invalid reading'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Reading->save($this->request->data)) {
				$this->Session->setFlash(__('The reading has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reading could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reading.' . $this->Reading->primaryKey => $id));
			$this->request->data = $this->Reading->find('first', $options);
		}
		$signs = $this->Reading->Sign->find('list');
		$tablets = $this->Reading->Tablet->find('list');
		$this->set(compact('signs', 'tablets'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Reading->id = $id;
		if (!$this->Reading->exists()) {
			throw new NotFoundException(__('Invalid reading'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reading->delete()) {
			$this->Session->setFlash(__('Reading deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Reading was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
