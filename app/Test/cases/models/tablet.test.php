<?php
/* Tablet Test cases generated on: 2011-05-19 10:01:16 : 1305792076*/
App::import('Model', 'Tablet');

class TabletTestCase extends CakeTestCase {
	var $fixtures = array('app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.tablets_term');

	function startTest() {
		$this->Tablet =& ClassRegistry::init('Tablet');
	}

	function endTest() {
		unset($this->Tablet);
		ClassRegistry::flush();
	}

}
