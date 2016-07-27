<?php
/* Periods Test cases generated on: 2011-05-27 13:57:41 : 1306497461*/
App::import('Controller', 'Periods');

class TestPeriodsController extends PeriodsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PeriodsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.period', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Periods =& new TestPeriodsController();
		$this->Periods->constructClasses();
	}

	function endTest() {
		unset($this->Periods);
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
