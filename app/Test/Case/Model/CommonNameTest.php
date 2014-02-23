<?php
App::uses('CommonName', 'Model');

/**
 * CommonName Test Case
 *
 */
class CommonNameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.common_name',
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
		'app.red_list',
		'app.threat',
		'app.location',
		'app.reference',
		'app.country',
		'app.continent',
		'app.profile',
		'app.language'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommonName = ClassRegistry::init('CommonName');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommonName);

		parent::tearDown();
	}

}
