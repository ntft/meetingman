<?php
App::uses('Meeting', 'Model');

/**
 * Meeting Test Case
 *
 */
class MeetingTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meeting',
		'app.meeting_room',
		'app.member',
		'app.meetings_member'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Meeting = ClassRegistry::init('Meeting');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Meeting);

		parent::tearDown();
	}

}
