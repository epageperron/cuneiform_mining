<?php
class Project extends AppModel {
	var $name = 'Project';
	var $displayField = 'project';
	
	var $validate = array(
	
		'project' => array(
			'rule' => 'notEmpty'
		)
	
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'project_id',
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
