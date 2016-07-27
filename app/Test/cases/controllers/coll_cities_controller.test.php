<?php
/* CollCities Test cases generated on: 2011-05-27 13:47:55 : 1306496875*/
App::import('Controller', 'CollCities');

class TestCollCitiesController extends CollCitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CollCitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.coll_city', 'app.coll_country', 'app.coll_museum', 'app.collection', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->CollCities =& new TestCollCitiesController();
		$this->CollCities->constructClasses();
	}

	function endTest() {
		unset($this->CollCities);
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
