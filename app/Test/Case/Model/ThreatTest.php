<?php
App::uses('Threat', 'Model');

/**
 * Threat Test Case
 *
 */
class ThreatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.threat',
		'app.status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Threat = ClassRegistry::init('Threat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Threat);

		parent::tearDown();
	}

}
