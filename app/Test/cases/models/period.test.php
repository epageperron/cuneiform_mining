<?php
/* Period Test cases generated on: 2011-05-19 10:36:30 : 1305794190*/
App::import('Model', 'Period');

class PeriodTestCase extends CakeTestCase {
	var $fixtures = array('app.period', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Period =& ClassRegistry::init('Period');
	}

	function endTest() {
		unset($this->Period);
		ClassRegistry::flush();
	}

}
