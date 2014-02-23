<?php
App::uses('HeadType', 'Model');

/**
 * HeadType Test Case
 *
 */
class HeadTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.head_type',
		'app.morphological'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HeadType = ClassRegistry::init('HeadType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HeadType);

		parent::tearDown();
	}

}
