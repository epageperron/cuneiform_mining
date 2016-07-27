<?php
class Language extends AppModel {
	var $name = 'Language';
	var $displayField = 'language';
	
	var $validate = array(
		'language' => array(
		'rule' => 'notEmpty'
			)
		);
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'languages_tablets',
			'foreignKey' => 'language_id',
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