<?php
class Month extends AppModel {
	var $name = 'Month';
	var $displayField = 'month';
	var $validate = array(
	
		'month' => array(
			'rule' => 'notEmpty'
		)
	
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'month_id',
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
