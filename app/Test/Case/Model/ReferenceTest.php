<?php
App::uses('Reference', 'Model');

/**
 * Reference Test Case
 *
 */
class ReferenceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.reference',
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
		'app.location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Reference = ClassRegistry::init('Reference');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reference);

		parent::tearDown();
	}

}
