<?php
/* CollCity Fixture generated on: 2011-05-19 10:27:17 : 1305793637 */
class CollCityFixture extends CakeTestFixture {
	var $name = 'CollCity';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'coll_country_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'coll_city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_coll_city_coll_country' => array('column' => 'coll_country_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'coll_country_id' => 1,
			'coll_city' => 'Lorem ipsum dolor sit amet'
		),
	);
}
