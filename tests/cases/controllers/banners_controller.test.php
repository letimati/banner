<?php
/* Banners Test cases generated on: 2011-01-31 22:13:53 : 1296512033*/
App::import('Controller', 'Banner.Banners');

class TestBannersController extends BannersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BannersControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->Banners =& new TestBannersController();
		$this->Banners->constructClasses();
	}

	function endTest() {
		unset($this->Banners);
		ClassRegistry::flush();
	}

}
?>