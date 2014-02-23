<?php
App::uses('Morphological', 'Model');

/**
 * Morphological Test Case
 *
 */
class MorphologicalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.morphological',
		'app.fish',
		'app.biology',
		'app.water_type',
		'app.description',
		'app.fish_taxonomy',
		'app.taxonomy',
		'app.founder',
		'app.gallery',
		'app.photo',
		'app.user',
		'app.role',
		'app.profile',
		'app.country',
		'app.continent',
		'app.common_name',
		'app.language',
		'app.status',
		'app.red_list',
		'app.threat',
		'app.location',
		'app.reference',
		'app.body_type',
		'app.mouth_type',
		'app.head_type',
		'app.color',
		'app.caudal_fin_type',
		'app.dorsal_fin_type',
		'app.scale_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Morphological = ClassRegistry::init('Morphological');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Morphological);

		parent::tearDown();
	}

}
