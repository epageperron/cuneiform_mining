 <?php
class TabletsController extends AppController {
public $name = 'Tablets';
public $helpers = array('Html', 'Form', 'Ajax','Javascript', 'Text','Resize');
public $components = array('Paginator', 'RequestHandler'/*, 'Search'*/, 'Filter.Filter', 'Session');
public $uses = array('Transac','Tablet', 'Term', 'TabletTerm','WordType','Word');
public $paginate = array(
		'maxLimit' => 500,
		'limit' => 500,
		'order' => array(
					'Tablet.period_id' => asc
		)
);


	function beforeFilter()
	{
		parent::beforeFilter();

		if($this->RequestHandler->isAjax())
		{
			Configure::write('debug', 0);
		}
	}


    var $filters = array
        (
            'index' => array
            (
                'Tablet' => array
	                (
						      'Tablet.no_cdli',
						      'Tablet.no_museum',
						      'Tablet.no_perso',
						      'Tablet.translit',
						      'Tablet.subject',
						      'Tablet.translation',
						      'Tablet.abstract',
						      'Tablet.epi_notes',
						      'Tablet.comments',
						      'Tablet.publications',

			      			'Tablet.collection_id' => array
									    (
										  'type' => 'select',
										  'label' => 'Collection',
										  'selector'=>'list_collections'
									      ),
		      				'Tablet.project_id' => array
									      (
										  'type' => 'select',
										  'label' => 'Project',
										      'selector'=>'list_projects'
									      ),
		      				'Tablet.arch_site_id' => array
									      (
										  'type' => 'select',
										  'label' => 'Archaeological Site',
										  'selector'=>'list_arch_sites'
									      ),
		      				'Tablet.genre_id' => array
									      (
										  'type' => 'select',
										  'label' => 'Genre',
										  'selector'=>'list_genres'
									      ),
							 		'Tablet.period_id' => array
									 		(
										 'type' => 'select',
										 'label' => 'Period',
										 'selector'=>'list_periods'
											 )



		    /*  'Tablet.ruler_id' => array
		      (
			  'type' => 'select',
			  'label' => 'Ruler',
			  'selector'=>'list_rulers'
		      ) ,
		      'Tablet.official_id' => array
		      (
			  'type' => 'select',
			  'label' => 'Official',
			  'selector'=>'list_officials'
			),
		      'Tablet.is_school_text' => array
		      (
			      'label' => 'School Texts Only',
			      'type' => 'checkbox',
			      		 'required' => false
		      ),
		      'Tablet.arch_site_uncertain' => array
		      (
			      'label' => 'Only Uncertain Site',
			      'type' => 'checkbox',
								 'required' => false,

		      ),
		      'Tablet.period_uncertain' => array
		      (
			      'label' => 'Uncertain period Only',
			      'type' => 'checkbox',
								 'required' => false

		      ),
		      'Tablet.genre_uncertain' => array
		      (
			      'label' => 'Only Genre Uncertain',
			      'type' => 'checkbox',
								 'required' => false

		      'Tablet.collated' => array
		      (
			      'label' => 'Collated Only',
			      'type' => 'checkbox',
								 'required' => false
		      ),
		      'Tablet.collated_from_picture' => array
		      (
			      'label' => 'Collated from Picture Only',
			      'type' => 'checkbox',
								 'required' => false
		      )*/
	      )
            )
        );




/*
month_id
year_id
date_day
date_month
date_day_id
date_month_id
*/

function refresh_all_terms()
{
	$tablets_ids = $this->Tablet->find('all', array('recursive'=> -1, 'fields' => array('Tablet.id'),  'order' => array('Tablet.id  ASC'),"NOT" => array(
        "Tablet.translit" =>""))); // list all id from tablets with translit not empty
	foreach ($tablets_ids as $tablet_id)
	{
		$this->Tablet->id = $tablet_id['Tablet']['id'];
		$this->data = $this->Tablet->read(null, $tablet_id['Tablet']['id']);
		$this->Tablet->save($this->data);// just resave tablet so the terms are extracted
	}
}


function delete_extra_terms()
{
// delete terms that don't have any tablet
	$this->Term->recursive = -1;
	$terms = $this->Term->find('all', array(
	 'contain' => 'TabletTerm'));
	foreach ($terms as $term){
	if (empty($term['TabletTerm'])){
	$this->Term->delete($term['Term']['id']);
		}
	}
}

function typo() {
		$this->set('title', 'Tablets Transactions Typology');
		$this->Tablet->recursive = 1;
		$this->set('tablets', $this->Tablet->find('all', array(
			'contain' => array(
									'Period',
									'Transac'))));
}
function index(){
$this->set('tablets', $tablets = $this->Tablet->find('all', array(
	'contain' => array(
							'Period',
							'ArchSite',
							'Group',
							'Keyword',
							'Tag',
							/*	'Term'=> array(
											'Word'=> array(
											'WordType'))*/))));
/*$this->set('tablets', $this->paginate());*/
}
function latex_tablets(){
$this->set('tablets', $tablets = $this->Tablet->find('all', array(
	//'order' => array('Tablet.no_perso  DESC'),
	'contain' => array(
							/*'Period',
							'ArchSite',
							'Group',
							'Transac',
								'Term'=> array(
											'Word'=> array(
											'WordType'))*/))));
/*$this->set('tablets', $this->paginate());*/
}
function medium() {
		$this->set('title', 'Tablets Medium Typology');
		$this->Tablet->recursive = 2;
		$this->set('tablets', $this->Tablet->find('all'));
}

function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tablet', true));
			$this->redirect(array('action' => 'index'));
		}

		$tablet = $this->Tablet->find('first',array('conditions' => array('Tablet.id' => $id),'contain' => array()));

		$atf_file=file_get_contents('/alty/data/cdli_data/cdliatf_unblocked.atf');
		if(strpos($atf_file, $tablet['Tablet']['no_cdli'])){
			preg_match('/(&'.$tablet['Tablet']['no_cdli'].'(.+?)&P)/s', $atf_file, $out);
			$this->Tablet->id = $id;
			$this->Tablet->set('cdli_atf','&'.$tablet['Tablet']['no_cdli'].$out[2]);
			$this->Tablet->save();
			}

		$this->Tablet->recursive = 3;
		$this->set('tablet', $this->Tablet->find('first',array(
    'conditions' => array('Tablet.id' => $id),
		'contain' => array('Genre',
								'Period',
								'Collection',
								'Project',
								'ArchSite',
								'ObjectType',
								'Group',
								'Keyword',
								'Tag',
								'SignPaleo',
								'Transac'=> array(
									 			'MainAction', 'Verb', 'MainTopic', 'Good'),
								'Term'=> array(
									 			'Word'=> array(
															'WordType'))))));

$db = $this->WordType->getDataSource();
$this->set('vocab',	$db->fetchAll(
	'SELECT WordType.id, WordType.word_type, WordType.parent_id, Word.id, Word.word, Word.translation, Word.comments, Word.bibliography, Term.id, Term.term, Term.Comments FROM adab.word_types AS WordType
	INNER JOIN adab.words_word_types 	AS WordsWordType 		ON (WordsWordType.word_type_id = WordType.id)
LEFT JOIN adab.words 			AS Word 			ON (WordsWordType.word_id = Word.id)
INNER JOIN adab.terms_words 		AS TermsWord 			ON (TermsWord.word_id = Word.id)
RIGHT JOIN adab.terms 			AS Term 			ON (TermsWord.term_id = Term.id)
INNER JOIN adab.tablets_terms 		AS TabletsTerm 			ON (TabletsTerm.term_id = Term.id)
RIGHT JOIN adab.tablets 			AS Tablet 			ON (TabletsTerm.tablet_id = Tablet.id)
WHERE Tablet.id = ? ORDER BY WordType.id',
    array($id)));
}

function add() {
$this->set('title', 'Add a tablet');
if (!empty($this->data)) {
	$this->set(compact('objectTypes','signPaleos','edges','shapes','sizeClasses','corners', 'archLocs', 'archSites', 'periods', 'genres', 'months', 'years', 'collections', 'projects', 'rulers', 'officials','fromLocations','fromPeople','toLocations','toPeople','groups', 'keywords', 'languages', 'tags', 'terms'));

	$tablet=$this->Tablet->save($this->data);
	$this->Session->setFlash('Your entry has been saved.');
	$this->redirect(array('action' => 'add'));
	}
$this->Tablet->Behaviors->load('Containable');
$this->set('archLocs', $this->Tablet->ArchLoc->find('list'));
	$this->set('archSites', $this->Tablet->ArchSite->find('list'));
	$this->set('periods', $this->Tablet->Period->find('list'));
	$this->set('genres', $this->Tablet->Genre->find('list'));
	$this->set('tags', $this->Tablet->Tag->find('list'));
	$this->set('collections', $this->Tablet->Collection->find('list'));
	$this->set('groups', $this->Tablet->Group->find('list'));
	$this->set('languages', $this->Tablet->Language->find('list'));
	$this->set('keywords', $this->Tablet->Keyword->find('list'));
	$this->set('months', $this->Tablet->Month->find('list'));
	$this->set('years', $this->Tablet->Year->find('list'));
	$this->set('projects', $this->Tablet->Project->find('list'));
	$this->set('terms', $this->Tablet->Term->find('list'));
	$this->set('rulers', $this->Tablet->Ruler->find('list', array('conditions' => "")));
	$this->set('officials', $this->Tablet->Official->find('list', array('conditions' => "")));
	$this->set('toLocations', $this->Tablet->ToLocation->find('list', array('conditions' => "")));
	$this->set('fromLocations', $this->Tablet->FromLocation->find('list', array('conditions' => "")));
	$this->set('fromPeople', $this->Tablet->FromPerson->find('list', array('conditions' => "")));
	$this->set('toPeople', $this->Tablet->ToPerson->find('list', array('conditions' => "")));
	$this->set('signPaleos', $this->Tablet->SignPaleo->find('list'));
	$this->set('edges', $this->Tablet->Edge->find('list'));
	$this->set('corners', $this->Tablet->Corner->find('list'));
	$this->set('shapes', $this->Tablet->Shape->find('list'));
	$this->set('sizeClasses', $this->Tablet->SizeClass->find('list'));
	$this->set('objectTypes', $this->Tablet->ObjectType->find('list'));
	$this->set('transacs', $this->Tablet->Transac->find('list'));

	}


function edit($id = null)
{
	$this->set('title_for_layout', 'Tablets - Edit');
	$this->Tablet->recursive = 2;
	$this->Tablet->id = $id;
	if (empty($this->data))
	{
		if (!$id && empty($this->data))
		{
			$this->Session->setFlash(__('Invalid tablet', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->data = $this->Tablet->read(null, $id);
	}
	else
	{
			$size = explode('x',$terms=preg_replace('/\*/', '', $this->data['Tablet']['size']));
			$height = $size[0];
			$width = $size[1];
			$thickness = $size[2];
			$lw_ratio= $size[0]/$size[1];
			$t_ratio = (($size[0]+$size[1])/2)/$size[2];

			$this->set(compact('height','width','thickness','lw_ratio','t_ratio', 'transacs','objectTypes', 'signPaleos','edges','shapes','sizeClasses','corners', 'archLocs', 'archSites', 'periods', 'genres', 'months', 'years', 'collections', 'projects', 'rulers', 'officials','fromLocations','fromPeople','toLocations','toPeople','groups', 'keywords', 'languages', 'tags', 'terms'));		$files=$this->data['File'];
		//debug($this->request->data);
			$size = explode('x',$terms=preg_replace('/\*/', '', $this->data['Tablet']['size']));
			$data['Tablet']['height'] = $size[0];
			$this->Tablet->set('width', $size[1]);
			$this->Tablet->set('thickness', $size[2]);
			$this->Tablet->set('lw_ratio', $size[0]/$size[1]);
			$this->Tablet->set('t_ratio', (($size[0]+$size[1])/2)/$size[2]);

			echo '<pre>';
			print_r($this->data['Tablet']);
			echo '<pre>';

		if ($this->Tablet->saveAll($this->data)){
	  	$this->Session->setFlash('Your entry has been updated.');
		  $this->redirect(array('action' => 'view', $id));
		  }
		else{
		  $this->Session->setFlash(__('The tablet could not be saved. Please, try again.', true));
		  }
	}
	$this->set('id',$this->Tablet->id);
	$this->set('tablet', $this->Tablet->read(null, $id));
	$this->set('archLocs', $this->Tablet->ArchLoc->find('list'));
	$this->set('archSites', $this->Tablet->ArchSite->find('list'));
	$this->set('periods', $this->Tablet->Period->find('list'));
	$this->set('genres', $this->Tablet->Genre->find('list'));
	$this->set('tags', $this->Tablet->Tag->find('list'));
	$this->set('collections', $this->Tablet->Collection->find('list'));
	$this->set('groups', $this->Tablet->Group->find('list'));
	$this->set('languages', $this->Tablet->Language->find('list'));
	$this->set('keywords', $this->Tablet->Keyword->find('list'));
	$this->set('months', $this->Tablet->Month->find('list'));
	$this->set('years', $this->Tablet->Year->find('list'));
	$this->set('projects', $this->Tablet->Project->find('list'));
	$this->set('terms', $this->Tablet->Term->find('list'));
	$this->set('rulers', $this->Tablet->Ruler->find('list', array('conditions' => "")));
	$this->set('officials', $this->Tablet->Official->find('list', array('conditions' => "")));
	$this->set('toLocations', $this->Tablet->ToLocation->find('list', array('conditions' => "")));
	$this->set('fromLocations', $this->Tablet->FromLocation->find('list', array('conditions' => "")));
	$this->set('fromPeople', $this->Tablet->FromPerson->find('list', array('conditions' => "")));
	$this->set('toPeople', $this->Tablet->ToPerson->find('list', array('conditions' => "")));
	$this->set('signPaleos', $this->Tablet->SignPaleo->find('list'));
	$this->set('edges', $this->Tablet->Edge->find('list'));
	$this->set('corners', $this->Tablet->Corner->find('list'));
	$this->set('shapes', $this->Tablet->Shape->find('list'));
	$this->set('sizeClasses', $this->Tablet->SizeClass->find('list'));
	$this->set('objectTypes', $this->Tablet->ObjectType->find('list'));
	$this->set('transacs', $this->Tablet->Transac->find('list'));
}

function delete($id = null)
{
	if (!$id)
	{
		$this->redirect(array('action'=>'index'));
	}
	else
	{
		if ($this->Tablet->delete($id, 'true'))
		{
			$this->Session->setFlash(__('Tablet deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tablet was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}


function search()
{
  $this->set('results',$this->Tablet->search($this->data['Tablet']['q'], array('recursive' => 2)));
  $data = $this->paginate('Tablet');
  $this->set('data', $data);

}

/*function autocomplete()
	{
		$search_ruler = $this->data['Tablet']['ruler'];
		$this->loadModel('Ruler');
		$rulers = $this->Ruler->find('all',
			array(
				'fields' => 'Ruler.term',
				'conditions' => array ("Ruler.term LIKE '$search_ruler%'", 'Ruler.word_type_id' => 13),
				'order' => 'term'
			)
		);

	$this->set(compact('rulers', 'search_ruler'));

 }*/

function update_tablet_from_locations(){
	$this->set('fromLocations', $this->Tablet->FromLocation->find('list', array('conditions' => array('FromLocation.word_type_id' => 8))));
	}

	function update_tablet_groups(){
$this->set('groups', $this->Tablet->Group->find('list'));
}
function update_tablet_months(){
	$this->set('months', $this->Tablet->Month->find('list'));

}
function update_tablet_rulers(){
	$this->set('rulers', $this->Tablet->Ruler->find('list', array('conditions' => array('Ruler.word_type_id' => 13))));

}
function update_tablet_arch_locs(){
	$this->set('archLocs', $this->Tablet->ArchLoc->find('list'));

}
function update_tablet_arch_sites(){
	$this->set('archSites', $this->Tablet->ArchSite->find('list'));

}
function update_tablet_collections(){
	$this->set('collections', $this->Tablet->Collection->find('list'));

}
function update_tablet_genres(){
	$this->set('genres', $this->Tablet->Genre->find('list'));

}
function update_tablet_keywords(){
	$this->set('keywords', $this->Tablet->Keyword->find('list'));
}
function update_tablet_officials(){
	$this->set('officials', $this->Tablet->Official->find('list', array('conditions' => array('Official.word_type_id' => 9))));

}
function update_tablet_projects(){
	$this->set('projects', $this->Tablet->Project->find('list'));

}
function update_tablet_tags(){
	$this->set('tags', $this->Tablet->Tag->find('list'));

}
function update_tablet_from_people(){
	$this->set('fromPeople', $this->Tablet->FromPerson->find('list', array('conditions' => array('FromPerson.word_type_id' => 9))));

}
function update_tablet_to_people(){
	$this->set('toPeople', $this->Tablet->ToPerson->find('list', array('conditions' => array('ToPerson.word_type_id' => 9))));

}
function update_tablet_to_locations(){
	$this->set('toLocations', $this->Tablet->ToLocation->find('list', array('conditions' => array('ToLocation.word_type_id' => 8))));
}


}
