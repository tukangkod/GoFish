<?php
App::uses('Continent', 'Model');

/**
 * Continent Test Case
 *
 */
class ContinentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.continent',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Continent = ClassRegistry::init('Continent');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Continent);

		parent::tearDown();
	}

}
