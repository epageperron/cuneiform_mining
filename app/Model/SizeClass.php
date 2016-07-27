<?php
class SizeClass extends AppModel {
	var $name = 'SizeClass';
	var $displayField = 'size_class';
	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'size_class_id'
		)
	);

}
