<?php

namespace App\Tests\Applications\Api\V1\Auth;

use App\Tests\Applications\Api\V1\V1TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class DeleteTest extends V1TestCase
{
    public function test_can_delete_profile ()
    {
        $user = factory(\App\Domains\Users\User::class)->create();

        $this->callAPIWithToken('DELETE', 'me', JWTAuth::fromUser($user), $user->toArray());

        $this->assertResponseStatus(204);
        $this->assertEmpty($this->response->content());
        $this->notSeeInDatabase('users', array_except($user->toArray(), ['password', 'password_confirmation']));

        $this->callAPIWithToken('GET', 'me', JWTAuth::fromUser($user), $user->toArray());
        $this->assertResponseStatus(404);
    }
}