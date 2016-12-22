<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

class HTTPTest extends TestCase {

	use WithoutMiddleware;

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testExample() {
		$this->assertTrue(true);
	}

	public function testApplication() {
		$response = $this->route('get', 'tutor.getAuditSelection', ['3', 'jyssh']);

		$this->assertResponseStatus(404);

		$view = $response->original; // returns View instance
		$this->dump();
		$view_name = $view->getName();

		$this->assertEquals($view_name, 'tutor.getAuditSelection');
	}
}
