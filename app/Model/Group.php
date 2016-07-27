<?php
class Group extends AppModel {
	var $name = 'Group';
	var $displayField = 'group';
		var $validate = array(
	
		'group' => array(
			'rule' => 'notEmpty'
		)
	
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'groups_tablets',
			'foreignKey' => 'group_id',
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
