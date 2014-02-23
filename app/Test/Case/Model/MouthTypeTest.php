<?php
App::uses('MouthType', 'Model');

/**
 * MouthType Test Case
 *
 */
class MouthTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mouth_type',
		'app.morphological'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MouthType = ClassRegistry::init('MouthType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MouthType);

		parent::tearDown();
	}

}
