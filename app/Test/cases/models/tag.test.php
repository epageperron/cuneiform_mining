<?php
/* Tag Test cases generated on: 2011-05-19 10:07:03 : 1305792423*/
App::import('Model', 'Tag');

class TagTestCase extends CakeTestCase {
	var $fixtures = array('app.tag', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Tag =& ClassRegistry::init('Tag');
	}

	function endTest() {
		unset($this->Tag);
		ClassRegistry::flush();
	}

}
