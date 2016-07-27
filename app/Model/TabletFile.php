<?php
class TabletFile extends AppModel {
	var $name = 'TabletFile';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'tablet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
