<?php
App::uses('RedList', 'Model');

/**
 * RedList Test Case
 *
 */
class RedListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.red_list',
		'app.status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RedList = ClassRegistry::init('RedList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RedList);

		parent::tearDown();
	}

}
