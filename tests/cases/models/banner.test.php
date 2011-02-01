<?php
/* Banner Test cases generated on: 2011-01-31 22:04:07 : 1296511447*/
App::import('Model', 'Banner.Banner');

class BannerTestCase extends CakeTestCase {
	function startTest() {
		$this->Banner =& ClassRegistry::init('Banner');
	}

	function endTest() {
		unset($this->Banner);
		ClassRegistry::flush();
	}

}
?>