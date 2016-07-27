<?php
class ArchSitesController extends AppController {

	var $name = 'ArchSites';

	function index() {
		$this->ArchSite->recursive = 0;
		$this->set('archSites', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid arch site', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('archSite', $this->ArchSite->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ArchSite->create();
			if ($this->ArchSite->save($this->data)) {
				$this->Session->setFlash(__('The arch site has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arch site could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid arch site', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ArchSite->save($this->data)) {
				$this->Session->setFlash(__('The arch site has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arch site could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ArchSite->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for arch site', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ArchSite->delete($id)) {
			$this->Session->setFlash(__('Arch site deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Arch site was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
