<?php

namespace Tests\Feature\Http\Controllers\Frontend\Auth;

use Tests\TestCase;

/**
 * @see \App\Http\Controllers\Frontend\Auth\ForgotPasswordController
 */
class ForgotPasswordControllerTest extends TestCase
{
    /**
     * @test
     */
    public function send_reset_link_email_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->post(route('frontend.auth.password.email'), [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function show_link_request_form_returns_an_ok_response()
    {
        $this->markTestIncomplete('This test case was generated by Shift. When you are ready, remove this line and complete this test case.');

        $response = $this->get(route('frontend.auth.password.email'));

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
