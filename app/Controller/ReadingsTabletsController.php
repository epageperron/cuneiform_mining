<?php
App::uses('AppController', 'Controller');
/**
 * ReadingsTablets Controller
 *
 * @property ReadingsTablet $ReadingsTablet
 */
class ReadingsTabletsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ReadingsTablet->recursive = 0;
		$this->set('readingsTablets', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ReadingsTablet->exists($id)) {
			throw new NotFoundException(__('Invalid readings tablet'));
		}
		$options = array('conditions' => array('ReadingsTablet.' . $this->ReadingsTablet->primaryKey => $id));
		$this->set('readingsTablet', $this->ReadingsTablet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ReadingsTablet->create();
			if ($this->ReadingsTablet->save($this->request->data)) {
				$this->Session->setFlash(__('The readings tablet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readings tablet could not be saved. Please, try again.'));
			}
		}
		$tablets = $this->ReadingsTablet->Tablet->find('list');
		$readings = $this->ReadingsTablet->Reading->find('list');
		$this->set(compact('tablets', 'readings'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ReadingsTablet->exists($id)) {
			throw new NotFoundException(__('Invalid readings tablet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReadingsTablet->save($this->request->data)) {
				$this->Session->setFlash(__('The readings tablet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readings tablet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReadingsTablet.' . $this->ReadingsTablet->primaryKey => $id));
			$this->request->data = $this->ReadingsTablet->find('first', $options);
		}
		$tablets = $this->ReadingsTablet->Tablet->find('list');
		$readings = $this->ReadingsTablet->Reading->find('list');
		$this->set(compact('tablets', 'readings'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ReadingsTablet->id = $id;
		if (!$this->ReadingsTablet->exists()) {
			throw new NotFoundException(__('Invalid readings tablet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReadingsTablet->delete()) {
			$this->Session->setFlash(__('Readings tablet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Readings tablet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ReadingsTablet->recursive = 0;
		$this->set('readingsTablets', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ReadingsTablet->exists($id)) {
			throw new NotFoundException(__('Invalid readings tablet'));
		}
		$options = array('conditions' => array('ReadingsTablet.' . $this->ReadingsTablet->primaryKey => $id));
		$this->set('readingsTablet', $this->ReadingsTablet->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ReadingsTablet->create();
			if ($this->ReadingsTablet->save($this->request->data)) {
				$this->Session->setFlash(__('The readings tablet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readings tablet could not be saved. Please, try again.'));
			}
		}
		$tablets = $this->ReadingsTablet->Tablet->find('list');
		$readings = $this->ReadingsTablet->Reading->find('list');
		$this->set(compact('tablets', 'readings'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ReadingsTablet->exists($id)) {
			throw new NotFoundException(__('Invalid readings tablet'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ReadingsTablet->save($this->request->data)) {
				$this->Session->setFlash(__('The readings tablet has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The readings tablet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReadingsTablet.' . $this->ReadingsTablet->primaryKey => $id));
			$this->request->data = $this->ReadingsTablet->find('first', $options);
		}
		$tablets = $this->ReadingsTablet->Tablet->find('list');
		$readings = $this->ReadingsTablet->Reading->find('list');
		$this->set(compact('tablets', 'readings'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ReadingsTablet->id = $id;
		if (!$this->ReadingsTablet->exists()) {
			throw new NotFoundException(__('Invalid readings tablet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ReadingsTablet->delete()) {
			$this->Session->setFlash(__('Readings tablet deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Readings tablet was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
