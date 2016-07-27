<?php
/* Year Test cases generated on: 2011-05-19 10:31:12 : 1305793872*/
App::import('Model', 'Year');

class YearTestCase extends CakeTestCase {
	var $fixtures = array('app.year', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Year =& ClassRegistry::init('Year');
	}

	function endTest() {
		unset($this->Year);
		ClassRegistry::flush();
	}

}
