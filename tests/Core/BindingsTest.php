<?php

namespace App\tests\Core;

use App\Tests\AbstractTestCase;
use App\Domains\Users\Repositories\UserRepositoryInterface;
use App\Domains\Users\Repositories\UserRepositoryEloquent;

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