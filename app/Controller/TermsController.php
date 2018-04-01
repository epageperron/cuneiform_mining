<?php
class TermsController extends AppController {
	var $actsAs = array ('Searchable', 'Containable');
	var $components = array('RequestHandler', 'AffTerms'/*, 'Search'*/, 'Session', 'Filter.Filter');
	var $name = 'Terms';
	var $paginate = array('limit' => 500, 'order' => array(  'Term.Word' => 'asc', 'Term.term' => 'asc' ));
var $uses = array('Term', 'Word', 'WordType', 'Tablet');

var $filters = array
		(
				'index' => array
				(
						'Term' => array
							(
							'Term.term')));

function index(){
$this->Term->recursive=1;
$terms = $this->Term->find('all', array (
'contain' => array('Word'),
));

$this->set('terms', $terms);

}

function inline_edit() {
//$wordTypes= $this->Term->WordType->find('list');
$this->Term->recursive=1;
$terms = $this->Term->find('all');
$this->set(compact('terms'));
$words = $this->Word->find('list');
$this->set(compact('words'));

if (!empty($this->data)) {
		if ($this->Term->save($this->data)) {
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('The term could not be saved. Please, try again.', true));
		}
	}
$this->set('terms', $this->paginate());
}



function view($id = null) {
	if (!$id) {
//	$this->Session->setFlash(__('Invalid term', true));
	//	$this->redirect(array('action' => 'index'));
	}
$this->Term->id = $id;
$this->Term->recursive = 2;
$this->set('term', $this->Term->read(null, $id));

	// find word to which this term is associated
	//$word=$this->Term->Word->find(


	// find all terms associated to this word
//	$terms=$this->Term->find('all',
//	array(
//	'conditions' => array ('Word.id' => $id),
//		'contain' => array(
	//		'WordType' ,
	//		'Tablet' =>  array(
	//			'TabletsTerms'=> array('Term')
//				)
//			)
//	)

//	);

$this->set('terms', $terms);/*
$this->loadModel('Tablet');
$this->Tablet->recursive=1;

$this->set('months', $this->Tablet->Month->find('list'));
$this->set('rulers', $this->Tablet->Ruler->find('list', array('conditions' =>'')));
$this->set('officials', $this->Tablet->Official->find('list', array('conditions' => '')));
$this->set('years', $this->Tablet->Year->find('list'));
$this->set('tablets', $this->paginate()); */

}

function add() {
      if (!empty($this->data)) {
	      $this->Term->create();
	      if ($this->Term->save($this->data)) {
		      $this->Session->setFlash(__('The term has been saved', true));
		      $this->redirect(array('action' => 'index'));
	      } else {
		      $this->Session->setFlash(__('The term could not be saved. Please, try again.', true));
	      }
      }
      $tablets = $this->Term->Tablet->find('list');
      $this->set(compact( 'tablets'));
}

function edit($id = null) {
//$this->set('words', $this->Term->Word->find('list'));
	$this->Term->recursive=2;
if (!$id && empty($this->data)) {
$this->Session->setFlash(__('Invalid term', true));
$this->redirect(array('action' => 'index'));
  }
if (!empty($this->data)) {
	if ($this->Term->save($this->data)) {
		$this->Session->setFlash(__('The term has been saved', true));
		$this->redirect(array('controller' => 'terms', 'action' => 'view', $id));
	} else {
		$this->Session->setFlash(__('The term could not be saved. Please, try again.', true));
	}
}
	$this->data = $this->Term->read(null, $id);
	$this->set('id', $id);
	$this->set('words', $this->Word->find('list'));
	$this->set('wordTypes', $this->WordType->find('list'));

}


function delete($id = null) {
	if (!$id) {
		$this->Session->setFlash(__('Invalid id for term', true));
		$this->redirect(array('action'=>'index'));
	}
	if ($this->Term->delete($id)) {
		$this->Session->setFlash(__('Term deleted', true));
		$this->redirect(array('action'=>'index'));
	}
	$this->Session->setFlash(__('Term was not deleted', true));
	$this->redirect(array('action' => 'index'));
}
public function update_term(){
if ($this->RequestHandler->isAjax())
	{
App::import('Core', 'sanitize');
$term = Sanitize::clean($this->params['form']['value']);

$this->Term->id = $this->params['form']['id'];
$this->Term->saveField('term', $term);


$this->set('term', $term);
	}
}

public function word_from_term($id){
// grab data from term
$this->Term->id = $id;
$this->Term->recursive = -1;
$term=$this->Term->read(null, $id);
// save word in association with term
$data = array(
    "Term" => Array
        (
            "id" => $id
        ),
    "Word" => Array
        (
            "word" => $term['Term']['term']
        )
);
print_r($data);

$this->Word->saveAll($data);
$word_id=$this->Word->id;
$this->redirect(array('controller' => 'words', 'action' => 'edit', $word_id));
}
}
