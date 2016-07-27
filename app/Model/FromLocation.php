<?php
class FromLocation extends AppModel {
	var $name = 'FromLocation';
	var $useTable = 'words';
	var $displayField = 'word';
	var $primaryKey = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'from_locations_tablets',
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
