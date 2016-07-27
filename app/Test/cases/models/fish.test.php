<?php
/* Fish Test cases generated on: 2011-05-19 10:28:10 : 1305793690*/
App::import('Model', 'Fish');

class FishTestCase extends CakeTestCase {
	var $fixtures = array('app.fish', 'app.term', 'app.word_type', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->Fish =& ClassRegistry::init('Fish');
	}

	function endTest() {
		unset($this->Fish);
		ClassRegistry::flush();
	}

}
