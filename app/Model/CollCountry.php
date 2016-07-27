<?php
class CollCountry extends AppModel {
	var $name = 'CollCountry';
	var $displayField = 'coll_country';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'CollCity' => array(
			'className' => 'CollCity',
			'foreignKey' => 'coll_country_id',
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
