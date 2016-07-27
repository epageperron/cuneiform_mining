<?php
/* CollCountries Test cases generated on: 2011-05-27 13:48:17 : 1306496897*/
App::import('Controller', 'CollCountries');

class TestCollCountriesController extends CollCountriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CollCountriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.coll_country', 'app.coll_city', 'app.coll_museum', 'app.collection', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->CollCountries =& new TestCollCountriesController();
		$this->CollCountries->constructClasses();
	}

	function endTest() {
		unset($this->CollCountries);
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
