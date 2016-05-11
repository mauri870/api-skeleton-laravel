<?php

namespace App\Tests;

abstract class ApiTestCase extends AbstractTestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost/api';
}
