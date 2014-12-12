<?php
App::uses('MeetingsMember', 'Model');

/**
 * MeetingsMember Test Case
 *
 */
class MeetingsMemberTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meetings_member',
		'app.meeting',
		'app.meeting_room',
		'app.member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MeetingsMember = ClassRegistry::init('MeetingsMember');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MeetingsMember);

		parent::tearDown();
	}

}
