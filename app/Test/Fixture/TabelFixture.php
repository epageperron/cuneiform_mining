<?php
/**
 * TabelFixture
 *
 */
class TabelFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tablets';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'arch_loc_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'arch_site_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'period_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'period_uncertain' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'genre_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'genre_uncertain' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'is_school_text' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'month_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'year_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'date_day' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'date_month' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'date_year' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'collection_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'no_arch' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'no_museum' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'no_cdli' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'no_etcsl' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'no_perso' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'size' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'subject' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 110, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'translit' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'cdli_atf' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'translation' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'abstract' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'epi_notes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'comments' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'publications' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'ruler_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'local_ruler_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'official_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'collated' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'collated_from_picture' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'arch_site_uncertain' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'shape_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'edge_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'corner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'size_class_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'object_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'no_cdli' => array('column' => 'no_cdli', 'unique' => 1),
			'fk_objects_periods1' => array('column' => 'period_id', 'unique' => 0),
			'fk_objects_genre1' => array('column' => 'genre_id', 'unique' => 0),
			'fk_objects_arch_loc' => array('column' => 'arch_loc_id', 'unique' => 0),
			'fk_objects_month' => array('column' => 'month_id', 'unique' => 0),
			'fk_objects_year' => array('column' => 'year_id', 'unique' => 0),
			'fk_objects_collections' => array('column' => 'collection_id', 'unique' => 0),
			'fk_objects_arch_site' => array('column' => 'arch_site_id', 'unique' => 0),
			'no_museum' => array('column' => 'no_museum', 'unique' => 0)
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
			'arch_loc_id' => 1,
			'arch_site_id' => 1,
			'period_id' => 1,
			'period_uncertain' => 1,
			'genre_id' => 1,
			'genre_uncertain' => 1,
			'is_school_text' => 1,
			'month_id' => 1,
			'year_id' => 1,
			'date_day' => 1,
			'date_month' => 1,
			'date_year' => 1,
			'collection_id' => 1,
			'no_arch' => 'Lorem ipsum dolor sit amet',
			'no_museum' => 'Lorem ipsum dolor sit amet',
			'no_cdli' => 'Lorem ipsum dolor sit amet',
			'no_etcsl' => 'Lorem ipsum dolor sit amet',
			'no_perso' => 'Lorem ipsum dolor sit amet',
			'size' => 'Lorem ipsum dolor sit amet',
			'subject' => 'Lorem ipsum dolor sit amet',
			'translit' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'cdli_atf' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'translation' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'abstract' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'epi_notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'comments' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'publications' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'project_id' => 1,
			'ruler_id' => 1,
			'local_ruler_id' => 1,
			'official_id' => 1,
			'collated' => 1,
			'collated_from_picture' => 1,
			'arch_site_uncertain' => 1,
			'shape_id' => 1,
			'edge_id' => 1,
			'corner_id' => 1,
			'size_class_id' => 1,
			'object_type_id' => 1
		),
	);

}
