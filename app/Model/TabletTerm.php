<?php
class TabletTerm extends AppModel {
	var $useTable = 'tablets_terms';
	var $name = 'TabletTerm';
	var $actsAs = array('Searchable','ExtendAssociations', 'Containable');
	
	var $belongsTo = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'tablet_id'

		),
		'Term' =>
            array(	'className' => 'Term',
					'foreignKey' => 'term_id'
        )
     
	
	);
	
	
		
}
