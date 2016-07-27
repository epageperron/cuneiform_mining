<?php
class Year extends AppModel {
	var $name = 'Year';
	var $displayField = 'year';
	var $validate = array(
	
		'year' => array(
			'rule' => 'notEmpty'
		)
	
	);

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'year_id',
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
