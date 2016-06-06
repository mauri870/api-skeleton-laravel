<?php

namespace App\Tests\Traits;

trait InteractsWithApi
{
    public function assertIfTokenIsValid($token)
    {
        $response = $this->call(
            'GET',
            'me',
            [],
            [],
            [],
            [
                'HTTP_Authorization' => 'Bearer '.$token
            ]
        );
        $this->assertResponseOk();
        $this->seeJsonEquals(json_decode($response->content(), 1), ['status_code' => 200, 'data' => auth()->user()]);
    }

    /**
     * Call the given API URI and return the Response.
     *
     * @param  string  $method
     * @param  string  $uri
     * @param  array   $parameters
     * @param  array   $cookies
     * @param  array   $files
     * @param  array   $server
     * @param  string  $content
     * @return \Illuminate\Http\Response
     */
    public function callAPI($method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $server = array_merge(['HTTP_ACCEPT' => 'application/json'], $server);
        return $this->call($method, $uri, $parameters, $cookies, $files, $server, $content);
    }

    /**
     * Call the given API URI with a token and return the Response.
     *
     * @param  string  $method
     * @param  string  $uri
     * @param  string  $token
     * @param  array   $parameters
     * @param  array   $cookies
     * @param  array   $files
     * @param  array   $server
     * @param  string  $content
     * @return \Illuminate\Http\Response
     */
    public function callAPIWithToken($method, $uri, $token, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
    {
        $server = array_merge(['HTTP_ACCEPT' => 'application/json', 'HTTP_Authorization' => 'Bearer '.$token], $server);
        return $this->call($method, $uri, $parameters, $cookies, $files, $server, $content);
    }
}