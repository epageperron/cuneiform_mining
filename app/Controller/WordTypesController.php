<?php
class WordTypesController extends AppController {
	var $actsAs = array ('Searchable', 'Containable');
	var $components = array('RequestHandler', 'AffTerms'/*, 'Search'*/, 'Session');
	var $name = 'WordTypes';

	function index() {
		$this->WordType->recursive=0;
		$terms = $this->WordType->find('all');

		$this->set('wordTypes', $this->paginate());

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid word type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('wordType', $this->WordType->find('first',array(
		'conditions' => array('WordType.id' => $id),
		'contain' => array('Word' => array('Term'))
	)));

		$this->set('wordType', $this->WordType->read(null, $id));
	}

	function latex_glossary() {
		$this->WordType->recursive = 4;
		$this->set('wordTypes', $this->WordType->find('all',array(
		'contain' => array(
								'Word' => array(
									'Term' => array(
										'Tablet'=> array('Period'))
	)))));

		$this->set('wordTypes', $this->WordType->read(null, $id));
	}


	function add() {
		if (!empty($this->data)) {
			$this->WordType->create();
			if ($this->WordType->save($this->data)) {
				$this->Session->setFlash(__('The word type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The word type could not be saved. Please, try again.', true));
			}
		}
		$parentWordTypes = $this->WordType->ParentWordType->find('list');
		$this->set(compact('parentWordTypes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid word type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->WordType->save($this->data)) {
				$this->Session->setFlash(__('The word type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The word type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->WordType->read(null, $id);
		}
		$parentWordTypes = $this->WordType->ParentWordType->find('list');
		$this->set(compact('parentWordTypes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for word type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->WordType->delete($id)) {
			$this->Session->setFlash(__('Word type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Word type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
