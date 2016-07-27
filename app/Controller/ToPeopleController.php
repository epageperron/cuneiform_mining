<?php
class ToPeopleController extends AppController {

	var $name = 'ToPersons';

	function index() {
		$this->ToPerson->recursive = 0;
		$this->set('to_persons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid to person', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('to_person', $this->ToPerson->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ToPerson->create();
			if ($this->ToPerson->save($this->data)) {
				$this->Session->setFlash(__('The to person has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The to person could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid to person', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ToPerson->save($this->data)) {
				$this->Session->setFlash(__('The to person has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The to person could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ToPerson->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for to person', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ToPerson->delete($id)) {
			$this->Session->setFlash(__('To person deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('To person was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
