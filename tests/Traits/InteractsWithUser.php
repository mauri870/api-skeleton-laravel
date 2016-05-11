<?php

namespace App\Tests\Traits;


use App\Domains\Users\User;
use Carbon\Carbon;

trait InteractsWithUser
{
    /**
     * Create a new test user
     *
     * @param string $name
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function insertTestUser($name = 'test', $email = 'test@test.com', $password = '12345678'){
        if (User::all()->count() == 0) {
            User::create(
                [
                    'name'=>$name,
                    'email'=>$email,
                    'password'=>bcrypt($password),
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ]
            );
        }

        return true;
    }
}