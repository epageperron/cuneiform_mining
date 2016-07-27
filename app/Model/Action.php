<?php
class Action extends AppModel {
	var $name = 'Action';
	var $useTable = 'words';
	var $displayField = 'word';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'actions_tablets',
			'foreignKey' => 'action_id',
			'associationForeignKey' => 'tablet_id',
		)
	);


}
