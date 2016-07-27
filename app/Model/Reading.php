<?php
class Reading extends AppModel {
	var $name = 'Reading';
	var $displayField = 'reading';
	var $actsAs = array('Searchable','ExtendAssociations', 'Containable');
	var $order = array('Reading.sign_id' => 'ASC', 'Reading.sign' => 'ASC');
	var $validate = array(
	
		'unique_sign' => array(
			'rule' => 'notEmpty'
		)
	
	);
	var $belongsTo = array(
		'Sign' => array(
			'className' => 'Sign',
			'foreignKey' => 'sign_id'

		));
	
	var $hasMany = array (
	'ReadingTablet'
	
	
	);
	var $hasAndBelongsToMany = array(
		'Tablet' =>
			array(
                'className'              => 'Tablet',
                'joinTable'              => 'readings_tablets',
                'foreignKey'             => 'reading_id',
                'associationForeignKey'  => 'tablet_id',
                'unique'                 => true,
				)
	);

		
}
