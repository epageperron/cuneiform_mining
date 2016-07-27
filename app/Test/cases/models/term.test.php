<?php
/* Term Test cases generated on: 2011-05-19 10:02:50 : 1305792170*/
App::import('Model', 'Term');

class TermTestCase extends CakeTestCase {
	var $fixtures = array('app.term', 'app.word_type', 'app.fish', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->Term =& ClassRegistry::init('Term');
	}

	function endTest() {
		unset($this->Term);
		ClassRegistry::flush();
	}

}
