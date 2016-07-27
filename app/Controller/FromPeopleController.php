<?php
class FromPeopleController extends AppController {

	var $name = 'FromPersons';

	function index() {
		$this->FromPerson->recursive = 0;
		$this->set('fromPeople', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid from person', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fromPerson', $this->FromPerson->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FromPerson->create();
			if ($this->FromPerson->save($this->data)) {
				$this->Session->setFlash(__('The from person has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The from person could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid from person', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FromPerson->save($this->data)) {
				$this->Session->setFlash(__('The from person has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The from person could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FromPerson->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for from person', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FromPerson->delete($id)) {
			$this->Session->setFlash(__('From person deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('From person was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
