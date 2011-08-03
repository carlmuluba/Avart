<?php
/* Artwork Test cases generated on: 2011-08-03 17:47:07 : 1312386427*/
App::uses('Artwork', 'Model');

/**
 * Artwork Test Case
 *
 */
class ArtworkTestCase extends CakeTestCase {
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

		$this->Artwork = ClassRegistry::init('Artwork');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artwork);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
