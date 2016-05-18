<?php

namespace App\Tests\Applications\Api\V1\Auth;

use App\Tests\Applications\Api\V1\V1TestCase;

class RegisterTest extends V1TestCase
{
    private $newUser;

    public function __construct()
    {
        parent::__construct();

        $this->newUser = [
            'name' => 'New User',
            'email' => 'new@user.com',
            'password' => 12345678,
            'address' => 'Street Test',
            'telephone' => '12345678',
            'password_confirmation' => 12345678
        ];
    }

    public function test_can_register_a_user()
    {
        $response = $this->callAPI('POST', 'register', $this->newUser);
        $this->assertResponseOk();

        $this->assertIfTokenIsValid(json_decode($response->content())->token);
        $this->seeInDatabase('users', array_except($this->newUser, ['password_confirmation']));
    }

    public function test_can_register_a_user_with_invalid_fields()
    {
        $wrong_fields = $this->newUser;
        foreach ($wrong_fields as $key=>$value) {

            $wrong_fields[$key] = '';

            $response = $this->callAPI('POST', 'register', $wrong_fields)->content();

            $this->assertTrue(array_key_exists("errors.{$key}.0", array_dot(json_decode($response, 1))));
            $this->assertResponseStatus(422);
            $this->notSeeInDatabase('users', array_except($wrong_fields, ['password_confirmation']));
        }
    }

    public function test_can_register_a_user_with_wrong_email()
    {
        $wrong_fields = $this->newUser;

        $wrong_fields['email'] = 'wrong.email';

        $response = $this->callAPI('POST', 'register', $wrong_fields)->content();

        $this->assertTrue(array_key_exists('errors.email.0', array_dot(json_decode($response, 1))));
        $this->assertResponseStatus(422);
        $this->notSeeInDatabase('users', array_except($wrong_fields, ['password_confirmation']));
    }
}
