<?php
class Fish extends AppModel {
	var $name = 'Fish';
	var $useTable = 'fishes';
	var $displayField = 'ed_fish';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Term' => array(
			'className' => 'Word',
			'foreignKey' => 'word_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
