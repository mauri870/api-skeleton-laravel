<?php

namespace App\Tests\Applications\Api;


use Symfony\Component\HttpFoundation\Response;
use App\Applications\Api\Traits\Rest\ResponseHelpers;

class ResponseHelpersTest extends ApiTestCase
{
    use ResponseHelpers;

    public function formatResponseForTest($status_code, $message = null)
    {
        $message = (!$message == null) ?: Response::$statusTexts[$status_code];

        return [
            'status_code' => $status_code,
            'message' => $message
        ];
    }

    public function test_bad_request()
    {
        $response = $this->badRequest();

        $this->assertJson($response->content(), $this->formatResponseForTest(Response::HTTP_BAD_REQUEST));
        $this->assertEquals($response->getStatusCode(), Response::HTTP_BAD_REQUEST);
    }

    public function test_model_not_found()
    {
        $response = $this->modelNotFound();
        $this->assertJson($response->content(), $this->formatResponseForTest(Response::HTTP_NOT_FOUND));
        $this->assertEquals($response->getStatusCode(), Response::HTTP_NOT_FOUND);
    }

    public function test_not_found()
    {
        $response = $this->call('GET', 'v1/this_is_a_not_found_uri')->content();
        
        $this->assertJson($response, $this->formatResponseForTest(Response::HTTP_NOT_FOUND));
        $this->assertJson($this->notFound()->content(), $this->formatResponseForTest(Response::HTTP_NOT_FOUND));
        $this->assertResponseStatus(Response::HTTP_NOT_FOUND);
    }

    public function test_ok_but_no_content()
    {
        $response = $this->okButNoContent();

        $this->assertJson($response->content(), '');
        $this->assertEquals($response->getStatusCode(), Response::HTTP_NO_CONTENT);
    }

    public function test_method_not_allowed_http()
    {
        $response = $this->methodNotAllowed();

        $this->assertJson($response->content(), $this->formatResponseForTest(Response::HTTP_METHOD_NOT_ALLOWED));
        $this->assertEquals($response->getStatusCode(), Response::HTTP_METHOD_NOT_ALLOWED);
    }

    public function test_down_for_maintenence()
    {
        $response = $this->downForMaintenence();

        $this->assertJson($response->content(), $this->formatResponseForTest(Response::HTTP_SERVICE_UNAVAILABLE));
        $this->assertEquals($response->getStatusCode(), Response::HTTP_SERVICE_UNAVAILABLE);
    }

    public function test_api_response()
    {
        $response = $this->ApiResponse();

        $this->assertJson($response->content(), $this->formatResponseForTest(Response::HTTP_OK));
        $this->assertEquals($response->getStatusCode(), Response::HTTP_OK);

        $response = $this->ApiResponse('This is a custom status message', Response::HTTP_UNAUTHORIZED);

        $this->assertJson($response->content(), $this->formatResponseForTest(Response::HTTP_UNAUTHORIZED, 'This is a custom status message'));
        $this->assertEquals($response->getStatusCode(), Response::HTTP_UNAUTHORIZED);
    }
}