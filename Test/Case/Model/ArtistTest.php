<?php
/* Artist Test cases generated on: 2011-08-03 17:46:36 : 1312386396*/
App::uses('Artist', 'Model');

/**
 * Artist Test Case
 *
 */
class ArtistTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.artist', 'app.user', 'app.country', 'app.artwork');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Artist = ClassRegistry::init('Artist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Artist);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
