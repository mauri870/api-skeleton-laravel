<?php

namespace App\Tests\Applications\Api\V1;

use App\Tests\Applications\Api\ApiTestCase;

abstract class V1TestCase extends ApiTestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost/api/v1';
}