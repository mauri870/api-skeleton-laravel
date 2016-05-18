<?php

namespace App\Tests\Core;

use App\Tests\AbstractTestCase;
use App\Domains\Users\Repositories\UserRepositoryEloquent;
use App\Domains\Users\Repositories\UserRepositoryInterface;

class BindingsTest extends AbstractTestCase
{
    public function test_user_repository_binds()
    {
        $this->assertEquals(
            get_class(app(UserRepositoryInterface::class)),
            UserRepositoryEloquent::class
        );
    }
}