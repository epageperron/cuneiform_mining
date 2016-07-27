<?php
/* Ruler Test cases generated on: 2011-05-19 10:35:01 : 1305794101*/
App::import('Model', 'Ruler');

class RulerTestCase extends CakeTestCase {
	var $fixtures = array('app.ruler', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Ruler =& ClassRegistry::init('Ruler');
	}

	function endTest() {
		unset($this->Ruler);
		ClassRegistry::flush();
	}

}
