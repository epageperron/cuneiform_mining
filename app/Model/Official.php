<?php
class Official extends AppModel {
	var $name = 'Official';
	var $useTable = 'words';
	var $displayField = 'word';
	var $primaryKey = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'official_id',
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
