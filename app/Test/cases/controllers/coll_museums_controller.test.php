<?php
/* CollMuseums Test cases generated on: 2011-05-27 13:48:36 : 1306496916*/
App::import('Controller', 'CollMuseums');

class TestCollMuseumsController extends CollMuseumsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CollMuseumsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.collection', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->CollMuseums =& new TestCollMuseumsController();
		$this->CollMuseums->constructClasses();
	}

	function endTest() {
		unset($this->CollMuseums);
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
