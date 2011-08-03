<?php
/* Artworks Test cases generated on: 2011-08-03 17:48:45 : 1312386525*/
App::uses('Artworks', 'Controller');

/**
 * TestArtworks 
 *
 */
class TestArtworks extends Artworks {
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
 * Artworks Test Case
 *
 */
class ArtworksTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.artwork', 'app.artist', 'app.user', 'app.country', 'app.style');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Artworks = new TestArtworks();
		$this->Artwor->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artworks);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
