<?php
class ArchLocsController extends AppController {

	var $name = 'ArchLocs';

	function index() {
		$this->ArchLoc->recursive = 0;
		$this->set('archLocs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid arch loc', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('archLoc', $this->ArchLoc->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ArchLoc->create();
			if ($this->ArchLoc->save($this->data)) {
				$this->Session->setFlash(__('The arch loc has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arch loc could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid arch loc', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ArchLoc->save($this->data)) {
				$this->Session->setFlash(__('The arch loc has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arch loc could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ArchLoc->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for arch loc', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ArchLoc->delete($id)) {
			$this->Session->setFlash(__('Arch loc deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Arch loc was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
