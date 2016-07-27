<?php
class Shape extends AppModel {
	var $name = 'Shape';
	var $displayField = 'shape';

	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'shape_id'
		)
	);

}
