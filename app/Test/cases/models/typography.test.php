<?php
/* Typography Test cases generated on: 2011-05-19 10:05:59 : 1305792359*/
App::import('Model', 'Typography');

class TypographyTestCase extends CakeTestCase {
	var $fixtures = array('app.typography', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Typography =& ClassRegistry::init('Typography');
	}

	function endTest() {
		unset($this->Typography);
		ClassRegistry::flush();
	}

}
