<?php
App::uses('CountriesController', 'Controller');

/**
 * CountriesController Test Case
 *
 */
class CountriesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.country',
		'app.continent',
		'app.common_name',
		'app.profile'
	);

}
