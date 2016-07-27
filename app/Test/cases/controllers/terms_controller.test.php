<?php
/* Terms Test cases generated on: 2011-06-11 18:57:45 : 1307811465*/
App::import('Controller', 'Terms');

class TestTermsController extends TermsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TermsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.term', 'app.word_type', 'app.fish', 'app.tablet', 'app.arch_loc', 'app.arch_site', 'app.period', 'app.genre', 'app.month', 'app.year', 'app.collection', 'app.coll_museum', 'app.coll_city', 'app.coll_country', 'app.project', 'app.main_action', 'app.ruler', 'app.tablet_file', 'app.group', 'app.groups_tablet', 'app.keyword', 'app.keywords_tablet', 'app.language', 'app.languages_tablet', 'app.tag', 'app.tablets_tag', 'app.tablets_term');

	function startTest() {
		$this->Terms =& new TestTermsController();
		$this->Terms->constructClasses();
	}

	function endTest() {
		unset($this->Terms);
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
