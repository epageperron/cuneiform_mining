<?php
/* WordType Test cases generated on: 2011-05-19 10:32:23 : 1305793943*/
App::import('Model', 'WordType');

class WordTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.word_type', 'app.term', 'app.fish', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->WordType =& ClassRegistry::init('WordType');
	}

	function endTest() {
		unset($this->WordType);
		ClassRegistry::flush();
	}

}
