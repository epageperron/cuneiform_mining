<?php
class WordType extends AppModel {
	public $displayField = 'word_type';
	var $hasAndBelongsToMany = array(
		'Word' => array(
			'className' => 'Word',
			'joinTable' => 'words_word_types',
			'foreignKey' => 'word_type_id',
			'associationForeignKey' => 'word_id',
			'unique' => true
		)
	);
}
