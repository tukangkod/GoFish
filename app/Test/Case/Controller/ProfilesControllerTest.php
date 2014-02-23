<?php
App::uses('ProfilesController', 'Controller');

/**
 * ProfilesController Test Case
 *
 */
class ProfilesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.profile',
		'app.user',
		'app.role',
		'app.photo',
		'app.gallery',
		'app.fish',
		'app.biology',
		'app.water_type',
		'app.description',
		'app.fish_taxonomy',
		'app.taxonomy',
		'app.founder',
		'app.morphological',
		'app.status',
		'app.red_list',
		'app.threat',
		'app.common_name',
		'app.country',
		'app.continent',
		'app.language',
		'app.location',
		'app.reference'
	);

}
