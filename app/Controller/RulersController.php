<?php
class RulersController extends AppController {

	var $name = 'Rulers';

	function index() {
		$this->Ruler->recursive = 0;
		$this->set('rulers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ruler', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ruler', $this->Ruler->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ruler->create();
			if ($this->Ruler->save($this->data)) {
				$this->Session->setFlash(__('The ruler has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ruler could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ruler', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ruler->save($this->data)) {
				$this->Session->setFlash(__('The ruler has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ruler could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ruler->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ruler', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ruler->delete($id)) {
			$this->Session->setFlash(__('Ruler deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ruler was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	/*function countTabletRulers{
		$rulers = $this->Tablet->Ruler->find('list');
			data[Tablet][ruler]
		compare with entered ruler
	if() {
		$showValidateNewTabletRuler = $this->Ajax->remoteFunction(
		array(
		'url' => array( 'controller' => 'rulers', 'action' => 'add', 1 ),
		'update' => 'post' )
		);
		}
	}
	
	
	function (validateNewTabletRuler){
	}
	
	*/
	}
