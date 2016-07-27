<?php
/* ArchSites Test cases generated on: 2011-05-27 13:45:25 : 1306496725*/
App::import('Controller', 'ArchSites');

class TestArchSitesController extends ArchSitesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ArchSitesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.arch_site', 'app.tablet', 'app.arch_loc', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->ArchSites =& new TestArchSitesController();
		$this->ArchSites->constructClasses();
	}

	function endTest() {
		unset($this->ArchSites);
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
