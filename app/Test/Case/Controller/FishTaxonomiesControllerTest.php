<?php
App::uses('FishTaxonomiesController', 'Controller');

/**
 * FishTaxonomiesController Test Case
 *
 */
class FishTaxonomiesControllerTest extends ControllerTestCase {

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

}
