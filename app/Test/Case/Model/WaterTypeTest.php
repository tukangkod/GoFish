<?php
App::uses('WaterType', 'Model');

/**
 * WaterType Test Case
 *
 */
class WaterTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.water_type',
		'app.biology'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->WaterType = ClassRegistry::init('WaterType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WaterType);

		parent::tearDown();
	}

}
