<?php
/* Collection Test cases generated on: 2011-05-19 10:28:50 : 1305793730*/
App::import('Model', 'Collection');

class CollectionTestCase extends CakeTestCase {
	var $fixtures = array('app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Collection =& ClassRegistry::init('Collection');
	}

	function endTest() {
		unset($this->Collection);
		ClassRegistry::flush();
	}

}
