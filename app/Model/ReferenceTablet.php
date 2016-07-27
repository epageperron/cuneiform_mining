<?php
class ReferencesTablets extends AppModel {
	var $name = 'ReferencesTablets';
	var $actsAs = array('ExtendAssociations', 'Containable');
	
	var $belongsTo = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'tablet_id'

		),
		'References' =>
            array(	'className' => 'Reference',
					'foreignKey' => 'reference_id'
        )
     
	
	);
	
	
		
}
