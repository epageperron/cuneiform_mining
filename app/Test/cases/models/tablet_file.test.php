<?php
/* TabletFile Test cases generated on: 2011-05-19 10:58:23 : 1305795503*/
App::import('Model', 'TabletFile');

class TabletFileTestCase extends CakeTestCase {
	var $fixtures = array('app.tablet_file', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->TabletFile =& ClassRegistry::init('TabletFile');
	}

	function endTest() {
		unset($this->TabletFile);
		ClassRegistry::flush();
	}

}
