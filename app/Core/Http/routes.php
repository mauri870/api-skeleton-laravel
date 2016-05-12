<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->group(['namespace' => 'App\Core\Http\Controllers', 'middleware' => 'cors'], function ($api) {
        $api->post('login', 'Auth\AuthController@authenticate');
        $api->post('register', 'Auth\AuthController@register');

        $api->group(['middleware' => 'jwt.auth'], function ($api) {
            // Todo Implement Protected Routes
        });
    });
});