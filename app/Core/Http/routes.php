<?php

Route::group(['namespace' => 'Auth'], function () {
//Login
    Route::get('/login',['as'=>'auth.login','uses'=>'AuthController@getLogin']);
    Route::post('/login', ['as'=>'auth.post_login','uses'=>'AuthController@postLogin']);

//Register
    Route::get('/register', ['as'=>'auth.register','uses'=>'AuthController@getRegister']);
    Route::post('/register', ['as'=>'auth.post_register','uses'=>'AuthController@postRegister']);

    //Authenticated users can entry
    Route::group(['middleware' => 'auth'], function () {

        //Logout
        Route::get('/logout', ['as'=>'auth.logout','uses'=>'AuthController@getLogout']);
    });


    //Reset password routes
    // Password reset link request routes...
    Route::get('password/email', ['as'=>'auth.password.email','uses'=>'PasswordController@getEmail']);
    Route::post('password/email', ['as'=>'auth.password.postEmail','uses'=>'PasswordController@postEmail']);

    // Password reset routes...
    Route::get('password/reset/{token}', ['middleware'=>'checkTokenExists','as'=>'auth.reset','uses'=>'PasswordController@getReset']);
    Route::post('password/reset', ['as'=>'auth.password.postReset','uses'=>'PasswordController@postReset']);
});