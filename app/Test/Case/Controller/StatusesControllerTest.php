<?php
App::uses('StatusesController', 'Controller');

/**
 * StatusesController Test Case
 *
 */
class StatusesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.status',
		'app.fish',
		'app.biology',
		'app.water_type',
		'app.description',
		'app.fish_taxonomy',
		'app.taxonomy',
		'app.founder',
		'app.gallery',
		'app.morphological',
		'app.common_name',
		'app.location',
		'app.reference',
		'app.red_list',
		'app.threat'
	);

}
