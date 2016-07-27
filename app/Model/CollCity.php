<?php
class CollCity extends AppModel {
	var $name = 'CollCity';
	var $displayField = 'coll_city';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'CollCountry' => array(
			'className' => 'CollCountry',
			'foreignKey' => 'coll_country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'CollMuseum' => array(
			'className' => 'CollMuseum',
			'foreignKey' => 'coll_city_id',
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
