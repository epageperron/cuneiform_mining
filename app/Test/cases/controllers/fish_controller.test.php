<?php
/* Fish Test cases generated on: 2011-05-27 13:54:33 : 1306497273*/
App::import('Controller', 'Fish');

class TestFishController extends FishController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FishControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.fish', 'app.term', 'app.word_type', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->Fish =& new TestFishController();
		$this->Fish->constructClasses();
	}

	function endTest() {
		unset($this->Fish);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
