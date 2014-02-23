<?php
App::uses('Fish', 'Model');

/**
 * Fish Test Case
 *
 */
class FishTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fish',
		'app.biology',
		'app.water_type',
		'app.description',
		'app.fish_taxonomy',
		'app.taxonomy',
		'app.founder',
		'app.gallery',
		'app.morphological',
		'app.status',
		'app.common_name',
		'app.location',
		'app.reference'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fish = ClassRegistry::init('Fish');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fish);

		parent::tearDown();
	}

}
