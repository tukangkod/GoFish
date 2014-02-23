<?php
App::uses('DorsalFinType', 'Model');

/**
 * DorsalFinType Test Case
 *
 */
class DorsalFinTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.dorsal_fin_type',
		'app.morphological'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DorsalFinType = ClassRegistry::init('DorsalFinType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DorsalFinType);

		parent::tearDown();
	}

}
