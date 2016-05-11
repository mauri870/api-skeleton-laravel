<?php

namespace App\Tests\Applications\Site;

use App\Tests\AbstractTestCase;

class AppTest extends AbstractTestCase
{
    /**
     * Test app base route.
     *
     * @return void
     */
    public function test_base_route()
    {
        $this->visit('/')
            ->see('Laravel 5');
    }
}
