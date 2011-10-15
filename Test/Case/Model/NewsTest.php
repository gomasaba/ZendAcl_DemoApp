<?php
/* News Test cases generated on: 2011-10-15 12:59:57 : 1318651197*/
App::uses('News', 'Model');

/**
 * News Test Case
 *
 */
class NewsTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.news');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->News = ClassRegistry::init('News');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->News);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
