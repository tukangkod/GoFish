<?php
App::uses('Status', 'Model');

/**
 * Status Test Case
 *
 */
class StatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status',
		'app.fish',
		'app.biology',
		'app.water_type',
		'app.description',
		'app.fish_taxonomy',
		'app.taxonomy',
		'app.founder',
		'app.gallery',
		'app.morphological',
		'app.common_name',
		'app.location',
		'app.reference',
		'app.red_list',
		'app.threat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Status = ClassRegistry::init('Status');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Status);

		parent::tearDown();
	}

}
