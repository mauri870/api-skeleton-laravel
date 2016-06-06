<?php

namespace App\Tests\Applications\Api;


use App\Applications\Api\Traits\Rest\ResponseHelpers;

class ResponseHelpersTest extends ApiTestCase
{
    use ResponseHelpers;

    public function test_bad_request()
    {
        $response = $this->badRequest();

        $this->assertJson($response->content(), ['status_code' => 400, 'message' => 'Bad Request']);
        $this->assertEquals($response->getStatusCode(), 400);
    }

    public function test_model_not_found()
    {
        $response = $this->modelNotFound();
        $this->assertJson($response->content(), ['status_code' => 404, 'message' => 'Record not found']);
        $this->assertEquals($response->getStatusCode(), 404);
    }

    public function test_not_found()
    {
        $response = $this->call('GET', 'v1/this_is_a_not_found_uri')->content();
        
        $this->assertJson($response, ['status_code' => 404, 'message' => 'Not found']);
        $this->assertJson($this->notFound()->content(), ['status_code' => 404, 'message' => 'Not found']);
        $this->assertResponseStatus(404);
    }

    public function test_ok_but_no_content()
    {
        $response = $this->okButNoContent();

        $this->assertJson($response->content(), '');
        $this->assertEquals($response->getStatusCode(), 204);
    }

    public function test_method_not_allowed_http()
    {
        $response = $this->methodNotAllowed();

        $this->assertJson($response->content(), ['status_code' => 405, 'message' => 'Method not allowed']);
        $this->assertEquals($response->getStatusCode(), 405);
    }

    public function test_down_for_maintenence()
    {
        $response = $this->downForMaintenence();

        $this->assertJson($response->content(), ['status_code' => 503, 'message' => 'Server is temporarily down for maintenence']);
        $this->assertEquals($response->getStatusCode(), 503);
    }

    public function test_api_response()
    {
        $response = $this->ApiResponse('This is a message');

        $this->assertJson($response->content(), ['message' => 'This is a message', 'status_code' => 200]);
        $this->assertEquals($response->getStatusCode(), 200);

        $response = $this->ApiResponse('This is a custom status message', 401);

        $this->assertJson($response->content(), ['message' => 'This is a custom status message', 'status_code' => 401]);
        $this->assertEquals($response->getStatusCode(), 401);
    }
}