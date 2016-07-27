<?php
/* CollCity Test cases generated on: 2011-05-19 10:27:22 : 1305793642*/
App::import('Model', 'CollCity');

class CollCityTestCase extends CakeTestCase {
	var $fixtures = array('app.coll_city', 'app.coll_country', 'app.coll_museum', 'app.collection');

	function startTest() {
		$this->CollCity =& ClassRegistry::init('CollCity');
	}

	function endTest() {
		unset($this->CollCity);
		ClassRegistry::flush();
	}

}
