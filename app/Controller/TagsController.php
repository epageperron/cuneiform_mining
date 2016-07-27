<?php
class TagsController extends AppController {
var $actsAs = array ('Searchable', 'Containable');
var $components = array('RequestHandler'/*, 'Search'*/, 'Session');
var $name = 'Tags';
var $uses = array(/*'Term',*/ 'Tag', 'TagType', 'Tablet');

public function index() {
$this->set('tags', $tags = $this->Tag->find('all'));
}

public function view($id = null) {
if (!$this->Tag->exists($id)) {
  throw new NotFoundException(__('Invalid tag'));
  }
$this->set('tag', $this->Tag->find('first', array(
   'conditions' => array('Tag.' . $this->Tag->primaryKey => $id),
	 'contain' => array('Tablet'=> array('Period', 'Genre')))));
}

/**
* add method
*
* @return void
*/
public function add() {
if ($this->request->is('post')) {
$this->Tag->create();
if ($this->Tag->save($this->request->data)) {
$this->Session->setFlash(__('The tag has been saved'));
$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
}
}
$tagTypes = $this->Tag->TagType->find('list');
$this->set(compact('tagTypes'));
}

/**
* edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function edit($id = null) {
if (!$this->Tag->exists($id)) {
throw new NotFoundException(__('Invalid tag'));
}
if ($this->request->is('post') || $this->request->is('put')) {
if ($this->Tag->save($this->request->data)) {
$this->Session->setFlash(__('The tag has been saved'));
$this->redirect(array('controller' => 'tags', 'action' => 'view', $id));
} else {
$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
$this->request->data = $this->Tag->find('first', $options);
}
$tagTypes = $this->Tag->TagType->find('list');
$this->set(compact('tagTypes'));
}

/**
* delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function delete($id = null) {
$this->Tag->id = $id;
if (!$this->Tag->exists()) {
throw new NotFoundException(__('Invalid tag'));
}
$this->request->onlyAllow('post', 'delete');
if ($this->Tag->delete()) {
$this->Session->setFlash(__('Tag deleted'));
$this->redirect(array('action' => 'index'));
}
$this->Session->setFlash(__('Tag was not deleted'));
$this->redirect(array('action' => 'index'));
}

/**
* admin_index method
*
* @return void
*/
public function admin_index() {
$this->Tag->recursive = 0;
$this->set('tags', $this->paginate());
}

/**
* admin_view method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_view($id = null) {
if (!$this->Tag->exists($id)) {
throw new NotFoundException(__('Invalid tag'));
}
$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
$this->set('tag', $this->Tag->find('first', $options));
}

/**
* admin_add method
*
* @return void
*/
public function admin_add() {
if ($this->request->is('post')) {
$this->Tag->create();
if ($this->Tag->save($this->request->data)) {
$this->Session->setFlash(__('The tag has been saved'));
$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
}
}
$tagTypes = $this->Tag->TagType->find('list');
$this->set(compact('tagTypes'));
}

/**
* admin_edit method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_edit($id = null) {
if (!$this->Tag->exists($id)) {
throw new NotFoundException(__('Invalid tag'));
}
if ($this->request->is('post') || $this->request->is('put')) {
if ($this->Tag->save($this->request->data)) {
$this->Session->setFlash(__('The tag has been saved'));
$this->redirect(array('action' => 'index'));
} else {
$this->Session->setFlash(__('The tag could not be saved. Please, try again.'));
}
} else {
$options = array('conditions' => array('Tag.' . $this->Tag->primaryKey => $id));
$this->request->data = $this->Tag->find('first', $options);
}
$tagTypes = $this->Tag->TagType->find('list');
$this->set(compact('tagTypes'));
}

/**
* admin_delete method
*
* @throws NotFoundException
* @param string $id
* @return void
*/
public function admin_delete($id = null) {
$this->Tag->id = $id;
if (!$this->Tag->exists()) {
throw new NotFoundException(__('Invalid tag'));
}
$this->request->onlyAllow('post', 'delete');
if ($this->Tag->delete()) {
$this->Session->setFlash(__('Tag deleted'));
$this->redirect(array('action' => 'index'));
}
$this->Session->setFlash(__('Tag was not deleted'));
$this->redirect(array('action' => 'index'));
}
}
