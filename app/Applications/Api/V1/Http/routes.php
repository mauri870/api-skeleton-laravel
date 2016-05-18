<?php

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function () {
    Route::group(['prefix' => 'v1'], function (){
        Route::post('login', 'Auth\AuthController@authenticate');
        Route::post('register', 'Auth\AuthController@register');

        Route::group(['middleware' => 'jwt.auth'], function () {
            Route::get('me', 'Auth\AuthController@me');
        });
    });
});