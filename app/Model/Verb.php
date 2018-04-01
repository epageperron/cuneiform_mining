<?php
App::uses('AppModel', 'Model');
/**
 * Verb Model
 *
 * @property Transac $Transac
 * @property Word $Word
 */
class Verb extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'terms';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'term';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Transac' => array(
			'className' => 'Transac',
			'foreignKey' => 'verb_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Word' => array(
			'className' => 'Word',
			'joinTable' => 'terms_words',
			'foreignKey' => 'verb_id',
			'associationForeignKey' => 'word_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

/*
	public function beforeFind($queryData) {
         $queryData['conditions'][$this->alias . '.client_id'] = 2;
				 'WordType.id' IN (1, 3, 7, 20, 22, 26, 31, 33)
         return $queryData;
     }
*/

}
