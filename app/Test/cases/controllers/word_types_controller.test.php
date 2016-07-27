<?php
/* WordTypes Test cases generated on: 2011-05-27 14:00:34 : 1306497634*/
App::import('Controller', 'WordTypes');

class TestWordTypesController extends WordTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class WordTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.word_type', 'app.term', 'app.fish', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->WordTypes =& new TestWordTypesController();
		$this->WordTypes->constructClasses();
	}

	function endTest() {
		unset($this->WordTypes);
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
