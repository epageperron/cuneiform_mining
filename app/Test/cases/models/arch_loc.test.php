<?php
/* ArchLoc Test cases generated on: 2011-05-19 10:25:39 : 1305793539*/
App::import('Model', 'ArchLoc');

class ArchLocTestCase extends CakeTestCase {
	var $fixtures = array('app.arch_loc', 'app.tablet', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->ArchLoc =& ClassRegistry::init('ArchLoc');
	}

	function endTest() {
		unset($this->ArchLoc);
		ClassRegistry::flush();
	}

}
