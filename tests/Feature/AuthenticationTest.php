<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register()
    {
        $response = $this->get('/register');
        $response->assertSee('Sign Up');

        $response = $this->post('/register', [
            'name' => 'tester',
            'email' => 'me@example.com',
            'password' => 'example-password',
            'password_confirmation' => 'example-password'
        ]);

        $response->assertRedirect('/');

        $this->assertAuthenticated();
    }

    /** @test */
    public function a_user_can_login()
    {
        // register
        $response = $this->post('/register', [
            'name' => 'tester',
            'email' => 'me@example.com',
            'password' => 'example-password',
            'password_confirmation' => 'example-password'
        ]);
        $response->assertRedirect('/');
        $this->assertAuthenticated();

        // logout
        $this->post('/logout');

        // log in
        $response = $this->post('/login', [
            'email' => 'me@example.com',
            'password' => 'example-password',
        ]);
        $response->assertRedirect('/');
        $this->assertAuthenticated();
    }
}
