<?php

Route::group(['prefix' => 'api', 'namespace' => 'App\Core\Api\V1\Http\Controllers', 'middleware' => 'cors'], function () {
    Route::post('login', 'Auth\AuthController@authenticate');
    Route::post('register', 'Auth\AuthController@register');

    Route::group(['middleware' => 'jwt.auth'], function () {
        // Todo Implement Protected routes
        Route::get('validate_token', 'Auth\AuthController@validateToken');
    });
});