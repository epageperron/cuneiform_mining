<?php
class Sign extends AppModel {
	var $name = 'Sign';
	var $displayField = 'sign';
	var $actsAs = array('Searchable','ExtendAssociations', 'Containable');
	var $order = array('Sign.sign_type_id' => 'ASC', 'Sign.sign' => 'ASC');
	var $validate = array(
	
		'sign' => array(
			'rule' => 'notEmpty'
		)
	
	);
	var $belongsTo = array(
		'SignType' => array(
			'className' => 'SignType',
			'foreignKey' => 'sign_type_id'

		)
	
	);
		var $hasMany = array (
	'Readings'
		
	);
		
}
