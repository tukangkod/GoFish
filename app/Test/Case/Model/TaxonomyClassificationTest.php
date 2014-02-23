<?php
App::uses('TaxonomyClassification', 'Model');

/**
 * TaxonomyClassification Test Case
 *
 */
class TaxonomyClassificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.taxonomy_classification',
		'app.taxonomy'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaxonomyClassification = ClassRegistry::init('TaxonomyClassification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaxonomyClassification);

		parent::tearDown();
	}

}
