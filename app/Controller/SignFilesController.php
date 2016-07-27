<?php
App::uses('AppController', 'Controller');
/**
 * SignFiles Controller
 *
 * @property SignFile $SignFile
 */
class SignFilesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SignFile->recursive = 0;
		$this->set('signFiles', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SignFile->exists($id)) {
			throw new NotFoundException(__('Invalid sign file'));
		}
		$options = array('conditions' => array('SignFile.' . $this->SignFile->primaryKey => $id));
		$this->set('signFile', $this->SignFile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SignFile->create();
			if ($this->SignFile->save($this->request->data)) {
				$this->Session->setFlash(__('The sign file has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign file could not be saved. Please, try again.'));
			}
		}
		$signs = $this->SignFile->Sign->find('list');
		$periods = $this->SignFile->Period->find('list');
		$this->set(compact('signs', 'periods'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SignFile->exists($id)) {
			throw new NotFoundException(__('Invalid sign file'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SignFile->save($this->request->data)) {
				$this->Session->setFlash(__('The sign file has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SignFile.' . $this->SignFile->primaryKey => $id));
			$this->request->data = $this->SignFile->find('first', $options);
		}
		$signs = $this->SignFile->Sign->find('list');
		$periods = $this->SignFile->Period->find('list');
		$this->set(compact('signs', 'periods'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SignFile->id = $id;
		if (!$this->SignFile->exists()) {
			throw new NotFoundException(__('Invalid sign file'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SignFile->delete()) {
			$this->Session->setFlash(__('Sign file deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sign file was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->SignFile->recursive = 0;
		$this->set('signFiles', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->SignFile->exists($id)) {
			throw new NotFoundException(__('Invalid sign file'));
		}
		$options = array('conditions' => array('SignFile.' . $this->SignFile->primaryKey => $id));
		$this->set('signFile', $this->SignFile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->SignFile->create();
			if ($this->SignFile->save($this->request->data)) {
				$this->Session->setFlash(__('The sign file has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign file could not be saved. Please, try again.'));
			}
		}
		$signs = $this->SignFile->Sign->find('list');
		$periods = $this->SignFile->Period->find('list');
		$this->set(compact('signs', 'periods'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->SignFile->exists($id)) {
			throw new NotFoundException(__('Invalid sign file'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SignFile->save($this->request->data)) {
				$this->Session->setFlash(__('The sign file has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sign file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SignFile.' . $this->SignFile->primaryKey => $id));
			$this->request->data = $this->SignFile->find('first', $options);
		}
		$signs = $this->SignFile->Sign->find('list');
		$periods = $this->SignFile->Period->find('list');
		$this->set(compact('signs', 'periods'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->SignFile->id = $id;
		if (!$this->SignFile->exists()) {
			throw new NotFoundException(__('Invalid sign file'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SignFile->delete()) {
			$this->Session->setFlash(__('Sign file deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sign file was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
