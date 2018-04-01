<?php
class Period extends AppModel {
	var $name = 'Period';
	var $displayField = 'period';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'period_id',
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
/*	function list_periods() // list a related model for the filter plugin
 {
 	return $this->Period->find('list');
}*/
}
