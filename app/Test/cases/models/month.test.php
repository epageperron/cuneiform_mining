<?php
/* Month Test cases generated on: 2011-05-19 10:37:26 : 1305794246*/
App::import('Model', 'Month');

class MonthTestCase extends CakeTestCase {
	var $fixtures = array('app.month', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Month =& ClassRegistry::init('Month');
	}

	function endTest() {
		unset($this->Month);
		ClassRegistry::flush();
	}

}
