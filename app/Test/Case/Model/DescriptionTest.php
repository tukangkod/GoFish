<?php
App::uses('Description', 'Model');

/**
 * Description Test Case
 *
 */
class DescriptionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.description',
		'app.fish',
		'app.biology',
		'app.water_type',
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
		$this->Description = ClassRegistry::init('Description');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Description);

		parent::tearDown();
	}

}
