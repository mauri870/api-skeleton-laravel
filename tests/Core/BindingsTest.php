<?php

namespace App\Tests\Core;

use App\Tests\AbstractTestCase;
use App\Domains\Plans\Repositories\PlanRepositoryEloquent;
use App\Domains\Users\Repositories\UserRepositoryEloquent;
use App\Domains\Plans\Repositories\PlanRepositoryInterface;
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