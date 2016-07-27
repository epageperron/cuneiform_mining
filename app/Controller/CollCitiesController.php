<?php
class CollCitiesController extends AppController {

	var $name = 'CollCities';

	function index() {
		$this->CollCity->recursive = 0;
		$this->set('collCities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid coll city', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('collCity', $this->CollCity->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CollCity->create();
			if ($this->CollCity->save($this->data)) {
				$this->Session->setFlash(__('The coll city has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coll city could not be saved. Please, try again.', true));
			}
		}
		$collCountries = $this->CollCity->CollCountry->find('list');
		$this->set(compact('collCountries'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid coll city', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CollCity->save($this->data)) {
				$this->Session->setFlash(__('The coll city has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coll city could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CollCity->read(null, $id);
		}
		$collCountries = $this->CollCity->CollCountry->find('list');
		$this->set(compact('collCountries'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for coll city', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CollCity->delete($id)) {
			$this->Session->setFlash(__('Coll city deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Coll city was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
