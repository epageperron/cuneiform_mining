<?php
class ObjectType extends AppModel {
	var $name = 'ObjectType';
	var $displayField = 'object_type';
	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'object_type_id'
		)
	);

}
