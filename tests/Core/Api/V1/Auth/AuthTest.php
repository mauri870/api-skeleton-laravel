<?php

namespace App\Tests\Api\V1\Auth;

use App\Tests\ApiTestCase;

class AuthTest extends ApiTestCase
{
    private $newUser;
    private $loginUser;

    public function __construct()
    {
        parent::__construct();

        $this->newUser = [
            'name' => 'New User',
            'email' => 'new@new.com',
            'password' => 12345678,
        ];

        $this->loginUser = [
            'email' => 'test@test.com',
            'password' => 12345678
        ];
    }

    public function test_can_register_a_user()
    {
        $response = $this->callAPI('POST', 'register', $this->newUser);

        $this->assertResponseOk();
        $this->assertIfTokenIsValid(json_decode($response->content())->token);
        $this->seeInDatabase('users', $this->newUser);
    }

    public function test_can_register_a_user_with_not_valid_fields()
    {
        $wrong_fields = $this->newUser;
        $wrong_fields['email'] = 'wrong.bad';

        $response = $this->callAPI('POST', 'register', $wrong_fields)->content();

        $this->assertTrue(array_key_exists('errors.email.0', array_dot(json_decode($response, 1))));
        $this->assertResponseStatus(422);
        $this->notSeeInDatabase('users', $wrong_fields);
    }

    public function test_can_login_a_user()
    {
        $response = $this->callAPI('POST', 'login', $this->loginUser);

        $this->assertResponseOk();
        $this->assertIfTokenIsValid(json_decode($response->content())->token);
    }

    public function test_can_login_a_user_with_wrong_credentials()
    {
        $wrong_user = ['email' => 'wrong@user.com', 'password' => 'wrong_pass'];
        $response = $this->callAPI('POST', 'login', $wrong_user);

        $this->seeJsonEquals(['message' => 'invalid_credentials','status_code' => 401], $response->content());
        $this->assertResponseStatus(401);
        $this->notSeeInDatabase('users', $wrong_user);
    }

    public function test_can_login_a_user_with_invalid_credentials()
    {
        $wrong_user = ['email' => 'wrong.user', 'password' => 'wrong_pass'];
        $response = $this->callAPI('POST', 'login', $wrong_user)->content();

        $this->assertTrue(array_key_exists('errors.email.0', array_dot(json_decode($response, 1))));
        $this->assertResponseStatus(422);
        $this->notSeeInDatabase('users', $wrong_user);
    }
}
