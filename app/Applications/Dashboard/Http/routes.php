<?php
//DashBoard Routes
Route::group(
    [
        'middleware' => ['auth', 'shareDashVarsToView'],
        'prefix' => 'dashboard'],
    function () {
        Route::get('/', ['as' => 'dashboard.index', 'uses' => 'DashController@index']);

        //Update profile
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/edit', ['as' => 'dashboard.profile.edit', 'uses' => 'ProfileController@edit']);
            Route::put('/edit', ['as' => 'dashboard.profile.update', 'uses' => 'ProfileController@update']);
        });

        Route::resource('notifications', 'NotificationController', ['only' => ['index']]);

        Route::resource('mail', 'MailController', ['only' => ['create', 'store']]);
});