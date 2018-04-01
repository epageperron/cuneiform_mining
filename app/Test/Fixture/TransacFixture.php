<?php
/**
 * TransacFixture
 *
 */
class TransacFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'main_action_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'verb_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'main_topic_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'good_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'main_action_id' => 1,
			'verb_id' => 1,
			'main_topic_id' => 1,
			'good_id' => 1
		),
	);

}
