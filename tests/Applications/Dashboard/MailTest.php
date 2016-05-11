<?php

namespace App\Tests\Applications\Dashboard;

use App\Tests\AbstractTestCase;
use App\Tests\Traits\AuthenticateUser;

class MailTest extends AbstractTestCase
{
    use AuthenticateUser;

    public function test_create_mail_route()
    {
        $this->visit('/dashboard/mail/create')
           ->see('Enviar')
           ->assertResponseStatus(200);
    }

    public function test_can_send_an_email()
    {
        $this->withoutMiddleware();

        $this->post('/dashboard/mail',
            [
                'to' => 'test@test.com',
                'cc' => 'test@test.com',
                'bcc' => 'test@test.com',
                'message' => 'This is a message!'
            ]
        )->assertResponseStatus(302);

        $this->assertEquals(0, count($this->app['mailer']->failures()));
    }
}
