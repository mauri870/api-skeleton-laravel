<?php

Route::group(['prefix' => 'api', 'namespace' => 'App\Applications\Api', 'middleware' => 'cors'], function () {
    Route::group(['prefix' => 'v1', 'namespace' => 'V1\Http\Controllers'], function (){
        Route::post('login', 'Auth\AuthController@authenticate');
        Route::post('register', 'Auth\AuthController@register');

        Route::get('plans', 'PlansController@plans');

        Route::group(['middleware' => 'jwt.auth'], function () {
            // Todo Implement Protected routes
            Route::get('validate_token', 'Auth\AuthController@validateToken');
        });
    });
});