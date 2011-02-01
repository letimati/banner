<?php
/* BannerItems Test cases generated on: 2011-01-31 22:14:13 : 1296512053*/
App::import('Controller', 'Banner.BannerItems');

class TestBannerItemsController extends BannerItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BannerItemsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->BannerItems =& new TestBannerItemsController();
		$this->BannerItems->constructClasses();
	}

	function endTest() {
		unset($this->BannerItems);
		ClassRegistry::flush();
	}

}
?>