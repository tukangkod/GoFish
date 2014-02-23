<?php
App::uses('Taxonomy', 'Model');

/**
 * Taxonomy Test Case
 *
 */
class TaxonomyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.taxonomy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Taxonomy = ClassRegistry::init('Taxonomy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taxonomy);

		parent::tearDown();
	}

}
