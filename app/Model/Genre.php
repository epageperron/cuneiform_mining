<?php
class Genre extends AppModel {
	var $name = 'Genre';
	var $displayField = 'genre';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $validate = array(
	
		'genre' => array(
			'rule' => 'notEmpty'
		)
	
	);
	var $belongsTo = array(
		'ParentGenre' => array(
			'className' => 'Genre',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ChildGenre' => array(
			'className' => 'Genre',
			'foreignKey' => 'parent_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'genre_id',
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

}
