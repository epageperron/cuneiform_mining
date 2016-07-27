<?php
class Fisherman extends AppModel {
	var $name = 'Fisherman';
	var $useTable = words';
	var $primaryKey = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	
var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'fisherman_tablets',
			'foreignKey' => 'term_id',
			'associationForeignKey' => 'tablet_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);	
	
	
}
