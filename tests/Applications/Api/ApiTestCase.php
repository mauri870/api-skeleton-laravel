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

    /**
     * The accept header for this API
     *
     * @var string
     */
    protected $accept_header;

    public function __construct()
    {
        parent::__construct();
        $this->accept_header = 'application/'.env('API_STANDARDS_TREE').'.'.env('API_SUBTYPE').'.v1+json';
    }
}
