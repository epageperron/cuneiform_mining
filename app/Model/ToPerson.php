<?php
class ToPerson extends AppModel {
	var $name = 'ToPerson';
	var $useTable = 'words';
	var $displayField = 'word';
	var $primaryKey = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

var $hasAndBelongsToMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'joinTable' => 'tablets_to_people',
			'foreignKey' => 'term_id',
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

/*	
public function beforeFind($queryData) {
$queryData['conditions']['Word.WordType.id'] = 9;
return $queryData;
}
*/	
}
?>