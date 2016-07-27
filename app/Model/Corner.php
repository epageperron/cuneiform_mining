<?php
class Corner extends AppModel {
	var $name = 'Corner';
	var $displayField = 'corner';
	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'corner_id'
		)
	);

}
