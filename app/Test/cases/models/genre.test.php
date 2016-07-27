<?php
/* Genre Test cases generated on: 2011-05-19 10:40:11 : 1305794411*/
App::import('Model', 'Genre');

class GenreTestCase extends CakeTestCase {
	var $fixtures = array('app.genre', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Genre =& ClassRegistry::init('Genre');
	}

	function endTest() {
		unset($this->Genre);
		ClassRegistry::flush();
	}

}
