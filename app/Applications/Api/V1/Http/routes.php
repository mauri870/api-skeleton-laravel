<?php

/**
 * @SWG\Swagger(schemes={"http"},
 *     basePath="/api/v1"
 * )
 * @SWG\Info(title="API Skeleton", version="v1")
 */

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function () {

    Route::group(['prefix' => 'v1'], function (){
        Route::post('login', 'Auth\AuthController@authenticate');

        Route::post('register', 'Auth\AuthController@register');

        Route::get('swagger.json', function (){
            $file = storage_path('app/swagger.json');
            if (file_exists($file)) {
                return response()->json(json_decode(file_get_contents($file)));
            }

            abort(404);
        });

        Route::group(['middleware' => ['jwt.auth', /*'jwt.refresh'*/]], function () {
            Route::get('me', 'Auth\AuthController@me');
        });
    });
});