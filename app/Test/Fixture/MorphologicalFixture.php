<?php
/**
 * MorphologicalFixture
 *
 */
class MorphologicalFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'fish_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'body_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'mouth_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'head_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'color_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'caudal_fin_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'dorsal_fin_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'scale_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'barbel' => array('type' => 'text', 'null' => false, 'default' => 'b\'0\'', 'length' => 1),
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
			'body_type_id' => 1,
			'mouth_type_id' => 1,
			'head_type_id' => 1,
			'color_id' => 1,
			'caudal_fin_type_id' => 1,
			'dorsal_fin_type_id' => 1,
			'scale_type_id' => 1,
			'barbel' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}
