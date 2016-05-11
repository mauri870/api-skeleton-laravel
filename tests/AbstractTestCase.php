<?php

namespace App\Tests;

use App\Tests\Traits\DatabaseSeeds;
use App\Tests\Traits\InteractsWithUser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Console\Kernel;
use Illuminate\Foundation\Testing\TestCase;

abstract class AbstractTestCase extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions, DatabaseSeeds, InteractsWithUser;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';
        $app->make(Kernel::class)->bootstrap();
        return $app;
    }
}
