<?php
App::uses('ScaleType', 'Model');

/**
 * ScaleType Test Case
 *
 */
class ScaleTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scale_type',
		'app.morphological'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ScaleType = ClassRegistry::init('ScaleType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ScaleType);

		parent::tearDown();
	}

}
