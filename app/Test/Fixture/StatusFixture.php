<?php
/**
 * StatusFixture
 *
 */
class StatusFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fish_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'red_list_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'threat_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'fish_id' => 1,
			'red_list_id' => 1,
			'threat_id' => 1
		),
	);

}
