<?php
/* CollMuseum Fixture generated on: 2011-05-19 10:03:58 : 1305792238 */
class CollMuseumFixture extends CakeTestFixture {
	var $name = 'CollMuseum';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'coll_city_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'museum' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_coll_museum_coll_city' => array('column' => 'coll_city_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'coll_city_id' => 1,
			'museum' => 'Lorem ipsum dolor sit amet'
		),
	);
}
