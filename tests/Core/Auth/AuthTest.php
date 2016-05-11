<?php

namespace App\Tests\Core\Auth;

use App\Tests\AbstractTestCase;

class AuthTest extends AbstractTestCase
{

    public function test_login_route()
    {
        $this->visit('/login')
            ->see('Faça Login para acessar o Sistema');
    }

    public function test_register_route()
    {
        $this->visit('/register')
            ->see('Registre-se');
    }

    public function test_can_register_a_new_user()
    {
        $this->visit('/register')
            ->type('Example', 'name')
            ->type('example@example.com', 'email')
            ->type('12345678', 'password')
            ->type('12345678', 'password_confirmation')
            ->press('Registrar-se')
            ->seePageIs('/dashboard')
            ->assertResponseStatus(200);
    }

    public function test_can_login_an_existent_user()
    {
        $this->visit('/login')
            ->type('test@test.com', 'email')
            ->type('12345678', 'password')
            ->check('remember')
            ->press('Entrar')
            ->seePageIs('/dashboard')
            ->assertResponseStatus(200);
    }
}
