<?php
/* ArchSite Test cases generated on: 2011-05-19 10:26:17 : 1305793577*/
App::import('Model', 'ArchSite');

class ArchSiteTestCase extends CakeTestCase {
	var $fixtures = array('app.arch_site', 'app.tablet', 'app.arch_loc', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->ArchSite =& ClassRegistry::init('ArchSite');
	}

	function endTest() {
		unset($this->ArchSite);
		ClassRegistry::flush();
	}

}
