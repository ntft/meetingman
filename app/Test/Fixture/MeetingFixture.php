<?php
/**
 * MeetingFixture
 *
 */
class MeetingFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'start_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'end_time' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'meeting_room_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'title' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gidai' => array('type' => 'string', 'null' => true, 'length' => 1024, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gijiroku' => array('type' => 'string', 'null' => true, 'length' => 10240, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'start_time' => '2014-12-12 06:13:38',
			'end_time' => '2014-12-12 06:13:38',
			'meeting_room_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'gidai' => 'Lorem ipsum dolor sit amet',
			'gijiroku' => 'Lorem ipsum dolor sit amet'
		),
	);

}
