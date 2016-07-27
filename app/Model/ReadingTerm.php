<?php
class ReadingsTablets extends AppModel {
	var $name = 'ReadingsTablets';
	var $actsAs = array('Searchable','ExtendAssociations', 'Containable');
	
	var $belongsTo = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'tablet_id'

		),
		'Reading' =>
            array(	'className' => 'Reading',
					'foreignKey' => 'reading_id'
        )
     
	
	);
	
	
		
}
