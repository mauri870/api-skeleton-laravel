# Api Skeleton for Laravel 5.1

## Installation

```bash
composer install
```

```bash
php artisan migrate:refresh
```

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
This skeleton comes with multiple unit tests
```bash
phpunit
```
