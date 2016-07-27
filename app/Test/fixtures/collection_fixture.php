<?php
/* Collection Fixture generated on: 2011-05-19 10:28:50 : 1305793730 */
class CollectionFixture extends CakeTestFixture {
	var $name = 'Collection';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'coll_museum_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'collection' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_collections_coll_museum' => array('column' => 'coll_museum_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'coll_museum_id' => 1,
			'collection' => 'Lorem ipsum dolor sit amet'
		),
	);
}
