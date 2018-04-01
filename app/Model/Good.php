<?php
App::uses('AppModel', 'Model');
/**
 * Good Model
 *
 * @property Transac $Transac
 * @property Word $Word
 */
class Good extends AppModel {

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
			'foreignKey' => 'good_id',
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
			'foreignKey' => 'good_id',
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

}
