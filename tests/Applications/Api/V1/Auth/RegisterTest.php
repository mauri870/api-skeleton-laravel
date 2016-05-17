<?php

namespace App\Tests\Core\Api\V1\Auth;

use App\Tests\ApiTestCase;

class RegisterTest extends ApiTestCase
{
    private $newUser;

    public function __construct()
    {
        parent::__construct();

        $this->newUser = [
            'name' => 'New Tenant',
            'email' => 'new@tenant.com',
            'password' => 12345678,
            'company_name' => 'New Tenant Co.',
            'cnpj' => random_cnpj(true),
            'address' => 'Street Test',
            'city' => 'New York',
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

            $this->assertTrue(array_key_exists('errors.'.$key.'.0', array_dot(json_decode($response, 1))));
            $this->assertResponseStatus(422);
            $this->notSeeInDatabase('users', array_except($wrong_fields, ['password_confirmation']));
        }
    }

    public function test_can_register_a_user_with_wrong_cnpj()
    {
        $wrong_fields = $this->newUser;

        $wrong_fields['cnpj'] = substr(random_cnpj(), 0, -1);

        $response = $this->callAPI('POST', 'register', $wrong_fields)->content();

        $this->assertTrue(array_key_exists('errors.cnpj.0', array_dot(json_decode($response, 1))));
        $this->assertResponseStatus(422);
        $this->notSeeInDatabase('users', array_except($wrong_fields, ['password_confirmation']));
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
