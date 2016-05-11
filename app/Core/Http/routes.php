<?php

$api = app('Dingo\Api\Routing\Router');



$api->version('v1', function ($api) {
    $api->post('login', '\App\Core\Http\Controllers\Auth\AuthController@authenticate');
    $api->post('register', '\App\Core\Http\Controllers\Auth\AuthController@register');

    $api->group(['middleware' => 'api.auth', 'providers' => ['jwt']], function ($api) {
        // Todo Implement Protected Routes
    });
});