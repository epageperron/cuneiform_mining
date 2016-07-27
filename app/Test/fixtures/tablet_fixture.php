<?php
/* Tablet Fixture generated on: 2011-05-19 10:01:15 : 1305792075 */
class TabletFixture extends CakeTestFixture {
	var $name = 'Tablet';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'arch_loc_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'arch_site_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'period_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'genre_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'month_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'year_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'collection_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'no_arch' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'no_museum' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'no_cdli' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'no_etcsl' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'no_perso' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'size' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'date_day' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'date_month' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'subject' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 110, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'translit' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'translation' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'abstract' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'epi_notes' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'comments' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'publications' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'typography_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'ruler_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'no_cdli' => array('column' => 'no_cdli', 'unique' => 1), 'fk_objects_periods1' => array('column' => 'period_id', 'unique' => 0), 'fk_objects_genre1' => array('column' => 'genre_id', 'unique' => 0), 'fk_objects_arch_loc' => array('column' => 'arch_loc_id', 'unique' => 0), 'fk_objects_month' => array('column' => 'month_id', 'unique' => 0), 'fk_objects_year' => array('column' => 'year_id', 'unique' => 0), 'fk_objects_collections' => array('column' => 'collection_id', 'unique' => 0), 'fk_objects_arch_site' => array('column' => 'arch_site_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'arch_loc_id' => 1,
			'arch_site_id' => 1,
			'period_id' => 1,
			'genre_id' => 1,
			'month_id' => 1,
			'year_id' => 1,
			'collection_id' => 1,
			'no_arch' => 'Lorem ipsum dolor sit amet',
			'no_museum' => 'Lorem ipsum dolor sit amet',
			'no_cdli' => 'Lorem ipsum dolor sit amet',
			'no_etcsl' => 'Lorem ipsum dolor sit amet',
			'no_perso' => 'Lorem ipsum dolor sit amet',
			'size' => 'Lorem ipsum dolor sit amet',
			'date_day' => 1,
			'date_month' => 1,
			'subject' => 'Lorem ipsum dolor sit amet',
			'translit' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'translation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'abstract' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'epi_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'publications' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'typography_id' => 1,
			'project_id' => 1,
			'ruler_id' => 1
		),
	);
}
