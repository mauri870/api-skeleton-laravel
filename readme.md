# Api Skeleton for Laravel 5.1

[![Build Status](https://travis-ci.org/mauri870/api-skeleton-laravel.svg?branch=master)](https://travis-ci.org/mauri870/api-skeleton-laravel)

## Installation

```bash
composer install
```

```bash
php artisan migrate:refresh
```

## Folder Structure
The `app` folder contains 3 subfolders.

```
Applications - Contains the applications served, like API's, Sites, etc

Core - Contains the core, all the features can be used in your applications

Domains - The domains available, like repositories and models
```

Feel free to edit and customize this structure

### API Debug
Enable more detailed output to your api. For enable set `API_DEBUG=true`

## Default Routes

For prevent problems with responses, send a `Accept: application/json` header for every request

### Authentication

#### POST `api/v1/login`
+ Request
    + email (string) - Your email
    + password (string) - Your password

+ Response 200 (application/json)
    + Body

            {
              "status_code": 200,
              "token": "your_token_here"
            }

#### POST `api/v1/register`
+ Request
    + name (string) - Your name
    + email (string) - Your email
    + address (string) - Your address
    + telephone (string) - Your telephone
    + password (string) - Your password
    + password_confirmation (string) - The same as your password

+ Response 200 (application/json)
    + Body

            {
              "status_code": 200,
              "token": "your_token_here"
            }

#### GET `api/v1/me` (need jwt token)
+ Request
    + Headers
    
                Authorization: Bearer your_token_here

+ Response 200 (application/json)
    + Body

            {
              "status_code": 200,
              "data": [
                "id": "1",
                "name": "User",
                "email": "user@app.com",
                ...
              ]
            }
            
## Errors
All exceptions thrown within the scope of your api (see `isApiCall` method in RestTrait) will be parsed by the laravel handler.

The Api exceptions will be parsed as json, the exceptions out of the api scope will be parsed with `whoops` (if app is not in production and APP_DEBUG is true)
or otherwise by the normal handler.

Use the `ResponseHelpers` trait for standardize your api responses:

```
$this->ApiResponse($data, $status_code);

$this->badRequest();

$this->modelNotFound();

$this->notFound();

$this->methodNotAllowed();
```

Basically all the methods above are shortcuts and have the same signature as `ApiResponse`, and they are also used by the rest handler too

If you can customize the pattern for all responses, edit the `ApiResponse` method in [App\Core\Traits\Rest\ResponseHelpers](https://github.com/mauri870/api-skeleton-laravel/blob/master/app/Core/Traits/Rest/ResponseHelpers.php) class

>Remember to always use the methods from `ResponseHelpers`, because your project will always follow this pattern, so the maintenece is more easy

The default format for json responses is the following:

```
$this->ApiResponse('String Response');

{
    "status_code" => 200,
    "message" => 'String Response'
}
```

```
$this->ApiResponse(['joke' => "I'm a teapot"], 418);

{
    "status_code" => 418,
    "joke" => "I'm a teapot"
    
}
```

```
$this->badRequest();

{
    "status_code" => 400,
    "message" => "Bad Request"
    
}

...

```

### Validation Errors
Please extend the `App\Core\Http\Requests\Request` for your validators, because the json response has a little change comparing with default `FormRequest` class.

In case of request is `ajax`, `wantsJson` or `isApiCall` a json response with errors will be automatically generated with `422` status.

The response body for errors is someting like this:

```
{
  "status_code": 422,
  "message": "Validation failed",
  "errors": {
    "field": [
      "Validation error is here"
    ],
    "other_field": [
      "Other validation error"
    ]
  }
}
```

You can customize the default error message editing the response method in [App\Core\Http\Requests\Request](https://github.com/mauri870/api-skeleton-laravel/blob/master/app/Core/Http/Requests/Request.php)


## Docker

This skeleton comes with docker containers preconfigured. See `docker-compose.yml` for adding or removing containers.
The following build-in commands is available:

`php artisan docker:up | down | restart` - Start, drop or restart the docker containers specified on docker-compose.yml

## Caddy
Caddy is a web server like apache or nginx, but with support for HTTP/2 and HTTPS by default.
HTTP/2 is a new version of HTTP that makes your website load faster. HTTP/2 is enabled by default when the connection is served over HTTPS.
A `Caddyfile` is present on this project, working for laravel. Feel free to modify then.

Please refer to caddy [documentation](https://caddyserver.com/) or [github repository](https://github.com/mholt/caddy) for more information.
For using caddy as a service, like on nginx for example, see [here](https://github.com/mholt/caddy/wiki/Caddy-as-a-service-examples)

## Commands

The following commands is available for usage:

`php artisan docker:up | down | restart` - Start, drop or restart the docker containers specified on docker-compose.yml

`php artisan ssh:run {command} | pull  {--folder=public_html | --branch=master}` - Execute ssh operations

## Testing
This skeleton comes with multiple unit tests.

```bash
phpunit
```

For aditional features see the traits inside `tests/Traits`
