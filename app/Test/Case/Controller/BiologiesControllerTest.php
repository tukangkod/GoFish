<?php
App::uses('BiologiesController', 'Controller');

/**
 * BiologiesController Test Case
 *
 */
class BiologiesControllerTest extends ControllerTestCase {

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

}
