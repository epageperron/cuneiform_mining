<?php
class Collection extends AppModel {
	var $name = 'Collection';
	var $displayField = 'collection';
var $validate = array(
	
		'collection' => array(
			'rule' => 'notEmpty'
		)
	
	);
	var $belongsTo = array(
		'CollMuseum' => array(
			'className' => 'CollMuseum',
			'foreignKey' => 'coll_museum_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'collection_id',
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
