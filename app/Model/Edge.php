<?php
class Edge extends AppModel {
	var $name = 'Edge';
	var $displayField = 'edge';
	var $hasMany = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'edge_id'
		)
	);

}
