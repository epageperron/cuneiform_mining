<?php
App::uses('AppModel', 'Model');
class ReadingTablet extends AppModel {
	var $useTable = 'readings_tablets';
	public $belongsTo = array(
		'Tablet' => array(
			'className' => 'Tablet',
			'foreignKey' => 'tablet_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Reading' => array(
			'className' => 'Reading',
			'foreignKey' => 'reading_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
