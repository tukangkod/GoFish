<?php
App::uses('Biology', 'Model');

/**
 * Biology Test Case
 *
 */
class BiologyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.biology',
		'app.fish',
		'app.founder',
		'app.taxonomy',
		'app.taxonomy_classification',
		'app.description',
		'app.gallery',
		'app.location',
		'app.morphological',
		'app.reference',
		'app.status',
		'app.common_name',
		'app.water_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Biology = ClassRegistry::init('Biology');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Biology);

		parent::tearDown();
	}

}
