<?php
/* Fishes Test cases generated on: 2011-05-27 13:43:15 : 1306496595*/
App::import('Controller', 'Fishes');

class TestFishesController extends FishesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FishesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.fish', 'app.term', 'app.word_type', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->Fishes =& new TestFishesController();
		$this->Fishes->constructClasses();
	}

	function endTest() {
		unset($this->Fishes);
		ClassRegistry::flush();
	}

}
