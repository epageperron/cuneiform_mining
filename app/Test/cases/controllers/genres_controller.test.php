<?php
/* Genres Test cases generated on: 2011-05-27 13:54:53 : 1306497293*/
App::import('Controller', 'Genres');

class TestGenresController extends GenresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GenresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.genre', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.typography', 'app.project', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.term', 'app.word_type', 'app.fish', 'app.tablets_term');

	function startTest() {
		$this->Genres =& new TestGenresController();
		$this->Genres->constructClasses();
	}

	function endTest() {
		unset($this->Genres);
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
