<?php
/* BannerItem Test cases generated on: 2011-01-31 22:04:11 : 1296511451*/
App::import('Model', 'Banner.BannerItem');

class BannerItemTestCase extends CakeTestCase {
	function startTest() {
		$this->BannerItem =& ClassRegistry::init('BannerItem');
	}

	function endTest() {
		unset($this->BannerItem);
		ClassRegistry::flush();
	}

}
?>