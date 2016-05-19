<?php

/**
 * @SWG\Swagger(schemes={"http"},
 *     basePath="/api/v1"
 * )
 * @SWG\Info(title="API Skeleton", version="v1")
 */

Route::group(['prefix' => 'api', 'middleware' => 'cors'], function () {

    Route::group(['prefix' => 'v1'], function (){

        /**
         * @SWG\Post(path="/api/v1/login",
         *      summary="Login a user",
         *      produces={"application/json"},
         *     @SWG\Response(response="200",
         *      description="Ok"),
         * )
         */

        Route::post('login', 'Auth\AuthController@authenticate');

        /**
         * @SWG\Post(path="/api/v1/register",
         *      summary="Register a new user",
         *      produces={"application/json"},
         *     @SWG\Response(response="200",
         *      description="Ok"),
         * )
         */

        Route::post('register', 'Auth\AuthController@register');


        /**
         * @SWG\Get(path="/api/v1/swagger.json",
         *      summary="Return a swagger json map",
         *      produces={"application/json"},
         *     @SWG\Response(response="200",
         *      description="Ok"),
         * )
         */

        Route::get('swagger.json', function (){
            $file = storage_path('app/swagger.json');
            if (file_exists($file)) {
                return response()->json(json_decode(file_get_contents($file)));
            }

            abort(404);
        });

        Route::group(['middleware' => 'jwt.auth'], function () {

            /**
             * @SWG\Get(path="/api/v1/me",
             *      summary="Return the currently logged in user",
             *      produces={"application/json"},
             *     @SWG\Response(response="200",
             *      description="Ok"),
             * )
             */

            Route::get('me', 'Auth\AuthController@me');
        });
    });
});