<?php
/* MainActions Test cases generated on: 2011-06-16 13:50:59 : 1308225059*/
App::import('Controller', 'MainActions');

class TestMainActionsController extends MainActionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MainActionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.main_action', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->MainActions =& new TestMainActionsController();
		$this->MainActions->constructClasses();
	}

	function endTest() {
		unset($this->MainActions);
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
