<?php
class FishController extends AppController {

	var $name = 'Fish';

	function index() {
		$this->Fish->recursive = 0;
		$this->set('fish', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid fish', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fish', $this->Fish->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Fish->create();
			if ($this->Fish->save($this->data)) {
				$this->Session->setFlash(__('The fish has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fish could not be saved. Please, try again.', true));
			}
		}
		$terms = $this->Fish->Term->find('list');
		$this->set(compact('terms'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid fish', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Fish->save($this->data)) {
				$this->Session->setFlash(__('The fish has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fish could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Fish->read(null, $id);
		}
		$terms = $this->Fish->Term->find('list');
		$this->set(compact('terms'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for fish', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Fish->delete($id)) {
			$this->Session->setFlash(__('Fish deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Fish was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
