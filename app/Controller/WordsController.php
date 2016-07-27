<?php
class WordsController extends AppController {
var $actsAs = array ('Searchable', 'Containable');
var $components = array('RequestHandler'/*, 'Search'*/, 'Session');
var $name = 'Words';
var $uses = array(/*'Term',*/ 'Word', 'WordType', 'Tablet');

public function index() {
$words = $this->Word->find('all', array(
   'contain'=>array(
      'WordType',
      'Term'),
		'order'=>array(word

		)
    )
);

$this->set('words', $words/*$this->paginate()*/);
}

public function view($id = null) {
if (!$this->Word->exists($id)) {
  throw new NotFoundException(__('Invalid word'));
  }
$this->set('word', $this->Word->find('first', array(
   'conditions' => array('Word.' . $this->Word->primaryKey => $id),
   'contain'=>array(
      'WordType',
      'Term' => array(
	 'Tablet'=> array('Period'))))));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->Word->create();
if ($this->Word->save($this->request->data)) {
$this->Session->setFlash(__('The word has been saved'));
$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('The word could not be saved. Please, try again.'));
}
}
$wordTypes = $this->Word->WordType->find('list');
$this->set(compact('wordTypes'));
}

/**
* edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function edit($id = null) {
if (!$this->Word->exists($id)) {
throw new NotFoundException(__('Invalid word'));
}
if ($this->request->is('post') || $this->request->is('put')) {
if ($this->Word->save($this->request->data)) {
$this->Session->setFlash(__('The word has been saved'));
$this->redirect(array('controller' => 'words', 'action' => 'view', $id));
} else {
$this->Session->setFlash(__('The word could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Word.' . $this->Word->primaryKey => $id));
$this->request->data = $this->Word->find('first', $options);
}
$wordTypes = $this->Word->WordType->find('list');
$this->set(compact('wordTypes'));
}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
function delete($id = null) {
	if (!$id) {
		$this->Session->setFlash(__('Invalid id for word', true));
		$this->redirect(array('action'=>'index'));
	}
	if ($this->Word->delete($id)) {
		$this->Session->setFlash(__('Word deleted', true));
		$this->redirect(array('action'=>'index'));
	}
	$this->Session->setFlash(__('Word was not deleted', true));
	$this->redirect(array('action' => 'index'));
}



/**
* admin_index method
*
* @return void
*/
public function admin_index() {
$this->Word->recursive = 0;
$this->set('words', $this->paginate());
}

/**
* admin_view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_view($id = null) {
if (!$this->Word->exists($id)) {
throw new NotFoundException(__('Invalid word'));
}
$options = array('conditions' => array('Word.' . $this->Word->primaryKey => $id));
$this->set('word', $this->Word->find('first', $options));
}

/**
* admin_add method
*
* @return void
*/
public function admin_add() {
if ($this->request->is('post')) {
$this->Word->create();
if ($this->Word->save($this->request->data)) {
$this->Session->setFlash(__('The word has been saved'));
$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('The word could not be saved. Please, try again.'));
}
}
$wordTypes = $this->Word->WordType->find('list');
$this->set(compact('wordTypes'));
}

/**
* admin_edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_edit($id = null) {
if (!$this->Word->exists($id)) {
throw new NotFoundException(__('Invalid word'));
}
if ($this->request->is('post') || $this->request->is('put')) {
if ($this->Word->save($this->request->data)) {
$this->Session->setFlash(__('The word has been saved'));
$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('The word could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Word.' . $this->Word->primaryKey => $id));
$this->request->data = $this->Word->find('first', $options);
}
$wordTypes = $this->Word->WordType->find('list');
$this->set(compact('wordTypes'));
}

/**
* admin_delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_delete($id = null) {
$this->Word->id = $id;
if (!$this->Word->exists()) {
throw new NotFoundException(__('Invalid word'));
}
$this->request->onlyAllow('post', 'delete');
if ($this->Word->delete()) {
$this->Session->setFlash(__('Word deleted'));
$this->redirect(array('action' => 'index'));
}
$this->Session->setFlash(__('Word was not deleted'));
$this->redirect(array('action' => 'index'));
}
}
