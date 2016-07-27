<?php
class FromLocationsController extends AppController {

	var $name = 'FromLocations';

	function index() {
		$this->FromLocation->recursive = 0;
		$this->set('fromLocations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid from location', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fromLocation', $this->FromLocation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FromLocation->create();
			if ($this->FromLocation->save($this->data)) {
				$this->Session->setFlash(__('The from location has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The from location could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid from location', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FromLocation->save($this->data)) {
				$this->Session->setFlash(__('The from location has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The from location could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FromLocation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for from location', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FromLocation->delete($id)) {
			$this->Session->setFlash(__('From location deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('From location was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
