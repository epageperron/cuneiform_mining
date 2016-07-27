<?php
class MainActionsController extends AppController {

	var $name = 'MainActions';

	function index() {
		$this->MainAction->recursive = 0;
		$this->set('mainActions', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid main action', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('mainAction', $this->MainAction->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->MainAction->create();
			if ($this->MainAction->save($this->data)) {
				$this->Session->setFlash(__('The main action has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The main action could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid main action', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MainAction->save($this->data)) {
				$this->Session->setFlash(__('The main action has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The main action could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MainAction->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for main action', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MainAction->delete($id)) {
			$this->Session->setFlash(__('Main action deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Main action was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
