<?php
class ToLocationsController extends AppController {

	var $name = 'ToLocations';

	function index() {
		$this->ToLocation->recursive = 0;
		$this->set('toLocations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid to location', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('toLocation', $this->ToLocation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ToLocation->create();
			if ($this->ToLocation->save($this->data)) {
				$this->Session->setFlash(__('The to location has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The to location could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid to location', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ToLocation->save($this->data)) {
				$this->Session->setFlash(__('The to location has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The to location could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ToLocation->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for to location', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ToLocation->delete($id)) {
			$this->Session->setFlash(__('To location deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('To location was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
