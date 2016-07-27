<?php
class WordType extends AppModel {
public $displayField = 'word_type';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Word' => array(
			'className' => 'Word',
			'joinTable' => 'words_word_types',
			'foreignKey' => 'word_type_id',
			'associationForeignKey' => 'word_id',
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
