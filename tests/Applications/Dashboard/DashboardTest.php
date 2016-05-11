<?php

namespace App\Tests\Applications\Dashboard;

use App\Tests\AbstractTestCase;
use App\Tests\Traits\AuthenticateUser;

class DashboardTest extends AbstractTestCase
{
    use AuthenticateUser;

    public function test_default_route()
    {
        $this->visit('/dashboard')
            ->seePageIs('/dashboard')
            ->assertResponseStatus(200);
    }

    public function test_links_on_menu()
    {
        $this->visit('/dashboard')
            ->click('Novo Email')
            ->seePageIs('/dashboard/mail/create')
            ->assertResponseStatus(200);

        $this->visit('/dashboard')
            ->click('Início')
            ->seePageIs('/dashboard')
            ->assertResponseStatus(200);
    }
}
