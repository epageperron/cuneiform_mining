<?php
/* Keyword Test cases generated on: 2011-05-19 10:38:56 : 1305794336*/
App::import('Model', 'Keyword');

class KeywordTestCase extends CakeTestCase {
	var $fixtures = array('app.keyword', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Keyword =& ClassRegistry::init('Keyword');
	}

	function endTest() {
		unset($this->Keyword);
		ClassRegistry::flush();
	}

}
