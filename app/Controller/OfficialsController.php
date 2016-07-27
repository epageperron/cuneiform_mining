<?php
class OfficialsController extends AppController {

	var $name = 'Officials';

	function index() {
		$this->Official->recursive = 0;
		$this->set('officials', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid official', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('official', $this->Official->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Official->create();
			if ($this->Official->save($this->data)) {
				$this->Session->setFlash(__('The official has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The official could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid official', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Official->save($this->data)) {
				$this->Session->setFlash(__('The official has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The official could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Official->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for official', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Official->delete($id)) {
			$this->Session->setFlash(__('Official deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Official was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
