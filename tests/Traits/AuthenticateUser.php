<?php

namespace App\Tests\Traits;

use Illuminate\Support\Facades\Auth;

trait AuthenticateUser
{
    /**
     * Authenticate a user
     *
     * @before
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function authenticate($email = 'test@test.com', $password = '12345678'){
        Auth::attempt(['email' => $email, 'password' => $password]);

        return true;
    }
}