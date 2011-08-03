<?php
/* Artists Test cases generated on: 2011-08-03 17:48:18 : 1312386498*/
App::uses('Artists', 'Controller');

/**
 * TestArtists 
 *
 */
class TestArtists extends Artists {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * Artists Test Case
 *
 */
class ArtistsTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.artist', 'app.user', 'app.country', 'app.artwork', 'app.style');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Artists = new TestArtists();
		$this->Arti->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artists);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
