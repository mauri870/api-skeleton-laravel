<?php

namespace App\Tests\Applications\Dashboard;

use App\Domains\Users\User;
use App\Tests\AbstractTestCase;
use App\Tests\Traits\AuthenticateUser;

class ProfileTest extends AbstractTestCase
{
    use AuthenticateUser;

    public function test_profile_edit_route()
    {
        $this->visit('/dashboard')
            ->click('Editar Perfil')
            ->seePageIs('/dashboard/profile/edit')
            ->see('Editar Perfil')
            ->assertResponseStatus(200);
    }

    public function test_can_update_profile()
    {
        $this->visit('/dashboard/profile/edit')
            ->type('ThisIsATest', 'name')
            ->type('this@isatest.com', 'email')
            ->type('12345678', 'old_password')
            ->type('87654321', 'password')
            ->type('87654321', 'password_confirmation')
            ->press('Atualizar perfil')
            ->seePageIs('/dashboard/profile/edit')
            ->assertResponseStatus(200);

        $this->assertEquals(
            'ThisIsATest',
            User::where('name', 'ThisIsATest')
                ->first()->name
        );

    }
}
