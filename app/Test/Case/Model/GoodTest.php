<?php
App::uses('Good', 'Model');

/**
 * Good Test Case
 *
 */
class GoodTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.good',
		'app.transac',
		'app.main_action',
		'app.verb',
		'app.word',
		'app.word_type',
		'app.words_word_type',
		'app.term',
		'app.tablet_term',
		'app.tablet',
		'app.object_type',
		'app.shape',
		'app.corner',
		'app.size_class',
		'app.edge',
		'app.collection',
		'app.coll_museum',
		'app.coll_city',
		'app.coll_country',
		'app.period',
		'app.arch_loc',
		'app.arch_site',
		'app.genre',
		'app.month',
		'app.year',
		'app.project',
		'app.ruler',
		'app.official',
		'app.tablet_file',
		'app.reading_tablet',
		'app.reading',
		'app.sign',
		'app.sign_type',
		'app.readings',
		'app.readings_tablet',
		'app.tag',
		'app.tablets_tag',
		'app.sign_paleo',
		'app.sign_paleos_tablet',
		'app.from_person',
		'app.from_people_tablet',
		'app.to_person',
		'app.tablets_to_person',
		'app.from_location',
		'app.from_locations_tablet',
		'app.to_location',
		'app.tablets_to_location',
		'app.language',
		'app.languages_tablet',
		'app.group',
		'app.groups_tablet',
		'app.tablets_term',
		'app.keyword',
		'app.keywords_tablet',
		'app.tablets_transac',
		'app.terms_word',
		'app.main_topic'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Good = ClassRegistry::init('Good');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Good);

		parent::tearDown();
	}

}
