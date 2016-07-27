<?php
class CollCountriesController extends AppController {

	var $name = 'CollCountries';

	function index() {
		$this->CollCountry->recursive = 0;
		$this->set('collCountries', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid coll country', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('collCountry', $this->CollCountry->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CollCountry->create();
			if ($this->CollCountry->save($this->data)) {
				$this->Session->setFlash(__('The coll country has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coll country could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid coll country', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CollCountry->save($this->data)) {
				$this->Session->setFlash(__('The coll country has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coll country could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CollCountry->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for coll country', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CollCountry->delete($id)) {
			$this->Session->setFlash(__('Coll country deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Coll country was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
