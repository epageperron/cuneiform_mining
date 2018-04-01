<?php
class Corner extends AppModel {
	var $name = 'Corner';
	var $displayField = 'corner';

	var $validate = array(

		'corner' => array(
			'rule' => 'notEmpty'
		)

	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'corner_id',
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
