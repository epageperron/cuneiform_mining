<?php
class CollMuseumsController extends AppController {

	var $name = 'CollMuseums';

	function index() {
		$this->CollMuseum->recursive = 0;
		$this->set('collMuseums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid coll museum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('collMuseum', $this->CollMuseum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CollMuseum->create();
			if ($this->CollMuseum->save($this->data)) {
				$this->Session->setFlash(__('The coll museum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coll museum could not be saved. Please, try again.', true));
			}
		}
		$collCities = $this->CollMuseum->CollCity->find('list');
		$this->set(compact('collCities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid coll museum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CollMuseum->save($this->data)) {
				$this->Session->setFlash(__('The coll museum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coll museum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CollMuseum->read(null, $id);
		}
		$collCities = $this->CollMuseum->CollCity->find('list');
		$this->set(compact('collCities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for coll museum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CollMuseum->delete($id)) {
			$this->Session->setFlash(__('Coll museum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Coll museum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
