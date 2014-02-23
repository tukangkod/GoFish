<?php
App::uses('FishTaxonomy', 'Model');

/**
 * FishTaxonomy Test Case
 *
 */
class FishTaxonomyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fish_taxonomy',
		'app.fish',
		'app.founder',
		'app.taxonomy',
		'app.biology',
		'app.water_type',
		'app.description',
		'app.gallery',
		'app.location',
		'app.morphological',
		'app.reference',
		'app.status',
		'app.common_name'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FishTaxonomy = ClassRegistry::init('FishTaxonomy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FishTaxonomy);

		parent::tearDown();
	}

}
