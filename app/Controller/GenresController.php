<?php
class GenresController extends AppController {

	var $name = 'Genres';

	function index() {
		$this->Genre->recursive = 0;
		$this->set('genres', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid genre', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('genre', $this->Genre->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Genre->create();
			if ($this->Genre->save($this->data)) {
				$this->Session->setFlash(__('The genre has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The genre could not be saved. Please, try again.', true));
			}
		}
		$parentGenres = $this->Genre->ParentGenre->find('list');
		$this->set(compact('parentGenres'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid genre', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Genre->save($this->data)) {
				$this->Session->setFlash(__('The genre has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The genre could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Genre->read(null, $id);
		}
		$parentGenres = $this->Genre->ParentGenre->find('list');
		$this->set(compact('parentGenres'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for genre', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Genre->delete($id)) {
			$this->Session->setFlash(__('Genre deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Genre was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
