<?php
class Tag extends AppModel {
	var $name = 'Tag';
	var $displayField = 'tag';
	public $actsAs = array('Searchable','ExtendAssociations', 'Containable');
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'tablets_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'tablet_id',
		)
	);
/*	function list_tags() // list a related model for the filter plugin
 {
 	return $this->Tag->find('list');
}*/
}
