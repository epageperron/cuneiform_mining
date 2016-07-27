<?php
/* CollMuseum Test cases generated on: 2011-05-19 10:03:58 : 1305792238*/
App::import('Model', 'CollMuseum');

class CollMuseumTestCase extends CakeTestCase {
	var $fixtures = array('app.coll_museum', 'app.coll_city', 'app.collection');

	function startTest() {
		$this->CollMuseum =& ClassRegistry::init('CollMuseum');
	}

	function endTest() {
		unset($this->CollMuseum);
		ClassRegistry::flush();
	}

}
