# Laravel Custom App

[![Build Status](https://travis-ci.org/Digital-Serra/laravel-custom.svg?branch=5.1)](https://travis-ci.org/Digital-Serra/laravel-custom)

[![Latest Stable Version](https://poser.pugx.org/digitalserra/laravel-custom/version)](https://packagist.org/packages/digitalserra/laravel-custom)

## Diferences

This package is a standard laravel 5.1.* installation, but with some additional content and pre-configured

## Additional Content
* Whoops
* Heroku deploy ready, create your app, add [heroku-buildpack-multi](https://github.com/ddollar/heroku-buildpack-multi) and push to heroku
* Laravel Collective
* Prettus L5 Repository
* IDE Helper Files for Facades, Models and PhpStorm autocompletation
* Laravel Collective Remote
* Artisan Command for git pull on remote server
* Debugbar
* Bower pre-configured with Jquery, Bootstrap, Font-Awesome and Sweetalert
* Login and register views and routes pre-configured
* Reset password system
* pt-BR language

### Installation

```
composer create-project digitalserra/laravel-custom project-name "~1.0"
``` 
    
* Install the prerequisites
    ```
    npm install
    ```

    ```
    bower install
    ```

    ```
    gulp
    ```

    ```
    php artisan migrate
    ```
    
    Get template options and layouts at [NEON Dashboard Theme](http://demo.neontheme.com/dashboard/main/)

## Docker

This skeleton comes with docker containers preconfigured. See `docker-compose.yml` for adding or removing containers.
A number of build-in commands is available:

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

## Notifications

Set new persistent notifications with:
    
```php
Notify::set('title','type','message')
```
Type must be one of: `info`, `success`, `error` or `warning`
You can automatically set a session message passing `true` as the fourth argument:
```php
Notify::set('title','type','message',true)
```
This will create a session notification based on: [edvinaskrucas/notification](https://github.com/edvinaskrucas/notification)
You can get the number of new notifications created on the latest request using `Notify::getNotificationCount()`

## Testing
This skeleton comes with multiple unit tests
```bash
phpunit
```

#### License

The Laravel framework and this package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
