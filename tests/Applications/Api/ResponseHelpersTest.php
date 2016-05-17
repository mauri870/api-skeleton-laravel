<?php

namespace App\Tests\Applications\Api;


use App\Core\Traits\ResponseHelpers;

class ResponseHelpersTest extends ApiTestCase
{
    use ResponseHelpers;

    public function test_bad_request()
    {
        $this->assertJson($this->badRequest()->content(), ['status_code' => 400, 'message' => 'Bad Request']);
    }

    public function test_model_not_found()
    {
        $this->assertJson($this->modelNotFound()->content(), ['status_code' => 404, 'message' => 'Record not found']);
    }

    public function test_not_found()
    {
        $response = $this->call('GET', 'v1/this_is_a_not_found_uri')->content();
        $this->assertJson($response, ['status_code' => 404, 'message' => 'Not found']);
        $this->assertJson($this->notFound()->content(), ['status_code' => 404, 'message' => 'Not found']);
    }

    public function test_method_not_allowed_http()
    {
        $this->assertJson($this->methodNotAllowed()->content(), ['status_code' => 405, 'message' => 'Method not allowed']);
    }

    public function test_api_response()
    {
        $response = $this->ApiResponse('This is a message')->content();
        $this->assertJson($response, ['message' => 'This is a message', 'status_code' => 200]);

        $response = $this->ApiResponse('This is a custom status message', 401)->content();
        $this->assertJson($response, ['message' => 'This is a custom status message', 'status_code' => 401]);
    }
}