<?php
App::uses('CaudalFinType', 'Model');

/**
 * CaudalFinType Test Case
 *
 */
class CaudalFinTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.caudal_fin_type',
		'app.morphological'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CaudalFinType = ClassRegistry::init('CaudalFinType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CaudalFinType);

		parent::tearDown();
	}

}
