<?php
class TransacsController extends AppController {
	public $helpers = array('Html', 'Form', 'Ajax','Javascript', 'Text');
	public $components = array('Paginator', 'RequestHandler', 'Filter.Filter', 'Session');


public $uses = array('Transac', 'Tablet', 'Term', 'MainAction', 'MainTopic');


    public function index() {
			  $this->set('transacs', $this->Transac->find('all'));
					$this->Term->recursive = -1;
			$this->set('terms', $this->Term->find('list'));
    }

		function view($id = null) {
		if (!$id) {
				$this->Session->setFlash(__('Invalid transac', true));
				$this->redirect(array('action' => 'index'));
			}
						$this->set('transac', $this->Transac->find('first', array(
	    			'conditions' => array('Transac.id' => $id))));
						$this->set('terms', $this->Term->find('list'));
						$this->loadModel('MainAction');
						$this->set('mainActions', $this->MainAction->find('list'));
						$this->loadModel('MainTopic');
						$this->set('mainTopics', $this->MainTopic->find('list'));
		}

		function add() {
			$this->loadModel('Term');$this->loadModel('Word');$this->loadModel('WordType');$this->loadModel('MainAction');$this->loadModel('MainTopic');


			$joins = array(
									array('table'=>'terms_words',
								 			 'alias' => 'TermWord',
								 			 'type'=>'inner',
								 			 'conditions'=> array(
								 			 'Term.id = TermWord.term_id'
								  )),
							   array('table'=>'words',
			                 'alias' => 'Word',
			                 'type'=>'inner',
			                 'conditions'=> array(
			                 'TermWord.word_id = Word.id'
			           )),
								 array('table'=>'words_word_types',
											 'alias' => 'WordWordType',
											 'type'=>'inner',
											 'conditions'=> array(
											 'Word.id = WordWordType.word_id'
								 )),
			           array('table'=>'word_types',
			                 'alias' => 'WordType',
			                 'type'=>'inner',
			                 'conditions'=> array(
			                 'WordWordType.word_type_id = WordType.id'
			           )),

			         );
$verbs_terms = $this->Term->find('list',array('joins'=>$joins,'recursive'=>-1, 'conditions' => array('WordType.id' => 2)));
$goods_terms = $this->Term->find('list', array('joins'=>$joins,'recursive'=>-1, 'conditions' => array('WordType.id' => 1, 3, 7, 20, 22, 26, 31, 33)));
$this->set(compact('verbs_terms', 'goods_terms'));
$this->set('mainActions', $this->MainAction->find('list'));
$this->set('mainTopics', $this->MainTopic->find('list'));



			if (!empty($this->data)) {
				$this->Transac->create();
				if ($this->Transac->save($this->data)) {
					$this->Session->setFlash(__('The transac has been saved', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The transac could not be saved. Please, try again.', true));
				}
			}
		}

		function edit($id = null) {
			if (!$id && empty($this->data)) {
				$this->Session->setFlash(__('Invalid transac', true));
				$this->redirect(array('action' => 'index'));
			}
			if (!empty($this->data)) {
				if ($this->Transac->save($this->data)) {
					$this->Session->setFlash(__('The transac has been saved', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The transac could not be saved. Please, try again.', true));
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Transac->read(null, $id);
			}
			$tablets = $this->Transac->Tablet->find('list');
			$this->set(compact('tablets'));
		}

		function delete($id = null) {
			if (!$id) {
				$this->Session->setFlash(__('Invalid id for transac', true));
				$this->redirect(array('action'=>'index'));
			}
			if ($this->Transac->delete($id)) {
				$this->Session->setFlash(__('Transac deleted', true));
				$this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('Transac was not deleted', true));
			$this->redirect(array('action' => 'index'));
		}


}

?>
