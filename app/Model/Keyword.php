<?php
class Keyword extends AppModel
{
	var $name = 'Keyword';
	var $displayField = 'keyword';
		
	var $validate = array(
	
		'keyword' => array(
			'rule' => 'notEmpty'
		)
	
	);

	
	
var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'keywords_tablets',
			'foreignKey' => 'keyword_id',
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
?>