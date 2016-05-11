<?php
namespace App\Core\Foundation;

use Illuminate\Foundation\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * The app version.
     *
     * @var string
     */
    const APP_VERSION = '0.1-dev';

    /**
     * Return the application version
     *
     * @return string
     */
    public function version()
    {
        return parent::version().PHP_EOL.'<info>Meeting App</info> '.self::APP_VERSION;
    }
}