<?php

namespace App\Tests\Applications\Api;

use App\Tests\AbstractTestCase;
use App\Tests\Traits\InteractsWithApi;

abstract class ApiTestCase extends AbstractTestCase
{
    use InteractsWithApi;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost/api';

    public function __construct()
    {
        parent::__construct();
    }
}
