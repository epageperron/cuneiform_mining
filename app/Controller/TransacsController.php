<?php
App::uses('AppController', 'Controller');
/**
 * Transacs Controller
 *
 * @property Transac $Transac
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TransacsController extends AppController {

	public $components = array('Paginator', 'Session');
var $uses = array('Transac','Period'/*,'Group',  'Month', 'Year'*/);

	public function index() {
		$this->Transac->recursive = 0;
		$this->set('transacs', $this->Paginator->paginate());
	}

	public function tablets_index() {
		$this->Transac->recursive = 1;
		$this->Paginator->settings = array(
	        'Transac' => array(
				'limit' => 9999));
				/*
				$this->set('groups', $this->Group->find('list'));
				$this->set('months', $this->Month->find('list'));
				$this->set('years', $this->Year->find('list'));*/
		$this->set('transacs', $this->Paginator->paginate());
		$this->set('periods', $this->Period->find('list'));
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Transac->exists($id)) {
			throw new NotFoundException(__('Invalid transac'));
		}
		$options = array('conditions' => array('Transac.' . $this->Transac->primaryKey => $id));
		$this->set('transac', $this->Transac->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transac->create();
			if ($this->Transac->save($this->request->data)) {
				$this->Session->setFlash(__('The transac has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transac could not be saved. Please, try again.'));
			}
		}
		$mainActions = $this->Transac->MainAction->find('list');
		$verbs = $this->Transac->Verb->find('list');
		$mainTopics = $this->Transac->MainTopic->find('list');
		$goods = $this->Transac->Good->find('list');
		$tablets = $this->Transac->Tablet->find('list');
		$this->set(compact('mainActions', 'verbs', 'mainTopics', 'goods', 'tablets'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Transac->exists($id)) {
			throw new NotFoundException(__('Invalid transac'));
		}
		if ($this->request->is(array('post', 'put'))) {
		if ($this->Transac->save($this->request->data)) {
				$this->Session->setFlash(__('The transac has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transac could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transac.' . $this->Transac->primaryKey => $id));
			$this->request->data = $this->Transac->find('first', $options);
		}
		$mainActions = $this->Transac->MainAction->find('list');
		$verbs = $this->Transac->Verb->find('list');
		$mainTopics = $this->Transac->MainTopic->find('list');
		$goods = $this->Transac->Good->find('list');
		$tablets = $this->Transac->Tablet->find('list');
		$this->set(compact('mainActions', 'verbs', 'mainTopics', 'goods', 'tablets'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Transac->id = $id;
		if (!$this->Transac->exists()) {
			throw new NotFoundException(__('Invalid transac'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transac->delete()) {
			$this->Session->setFlash(__('The transac has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transac could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Transac->recursive = 0;
		$this->set('transacs', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Transac->exists($id)) {
			throw new NotFoundException(__('Invalid transac'));
		}
		$options = array('conditions' => array('Transac.' . $this->Transac->primaryKey => $id));
		$this->set('transac', $this->Transac->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Transac->create();
			if ($this->Transac->save($this->request->data)) {
				$this->Session->setFlash(__('The transac has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transac could not be saved. Please, try again.'));
			}
		}
		$mainActions = $this->Transac->MainAction->find('list');
		$verbs = $this->Transac->Verb->find('list');
		$mainTopics = $this->Transac->MainTopic->find('list');
		$goods = $this->Transac->Good->find('list');
		$tablets = $this->Transac->Tablet->find('list');
		$this->set(compact('mainActions', 'verbs', 'mainTopics', 'goods', 'tablets'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Transac->exists($id)) {
			throw new NotFoundException(__('Invalid transac'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Transac->save($this->request->data)) {
				$this->Session->setFlash(__('The transac has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transac could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Transac.' . $this->Transac->primaryKey => $id));
			$this->request->data = $this->Transac->find('first', $options);
		}
		$mainActions = $this->Transac->MainAction->find('list');
		$verbs = $this->Transac->Verb->find('list');
		$mainTopics = $this->Transac->MainTopic->find('list');
		$goods = $this->Transac->Good->find('list');
		$tablets = $this->Transac->Tablet->find('list');
		$this->set(compact('mainActions', 'verbs', 'mainTopics', 'goods', 'tablets'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Transac->id = $id;
		if (!$this->Transac->exists()) {
			throw new NotFoundException(__('Invalid transac'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Transac->delete()) {
			$this->Session->setFlash(__('The transac has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transac could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
