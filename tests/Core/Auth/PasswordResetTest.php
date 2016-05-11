<?php

namespace App\Tests\Core\Auth;

use App\Tests\AbstractTestCase;

class PasswordResetTest extends AbstractTestCase
{

    public function test_password_reset_route_with_nonexistent_user()
    {
        $this->visit('/password/email')
            ->type('blablabla@domain.com', 'email')
            ->press('Redefinir')
            ->seePageIs('/password/email')
            ->see('Não conseguimos encontrar nenhum usuário com o endereço de e-mail especificado.');
    }

    public function test_password_reset_token_route_with_nonexistent_token()
    {
        $token = md5(uniqid("this is a test token"));

        $this->call('GET', '/password/reset/'.$token);

        $this->assertResponseStatus(404);
    }
}
