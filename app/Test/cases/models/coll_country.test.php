<?php
/* CollCountry Test cases generated on: 2011-05-19 10:05:30 : 1305792330*/
App::import('Model', 'CollCountry');

class CollCountryTestCase extends CakeTestCase {
	var $fixtures = array('app.coll_country', 'app.coll_city', 'app.coll_museum', 'app.collection');

	function startTest() {
		$this->CollCountry =& ClassRegistry::init('CollCountry');
	}

	function endTest() {
		unset($this->CollCountry);
		ClassRegistry::flush();
	}

}
