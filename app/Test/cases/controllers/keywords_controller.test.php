<?php
/* Keywords Test cases generated on: 2011-05-27 13:56:53 : 1306497413*/
App::import('Controller', 'Keywords');

class TestKeywordsController extends KeywordsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class KeywordsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.keyword', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Keywords =& new TestKeywordsController();
		$this->Keywords->constructClasses();
	}

	function endTest() {
		unset($this->Keywords);
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
