<?php

namespace App\Tests\Core\Auth;

use App\Tests\ApiTestCase;

class AuthTest extends ApiTestCase
{
    public function test_can_register_a_user() {
        $this->post('register',
            [
                'name' => 'New User',
                'email' => 'new@new.com',
                'password' => 12345678,
            ]
        )->see('token');

        $this->seeInDatabase('users',['name' => 'New User', 'email' => 'new@new.com']);

    }

    public function test_can_login_a_user() {
        $this->post('login',
            [
                'email' => 'test@test.com',
                'password' => 12345678,
            ]
        )->see('token');
    }
}
