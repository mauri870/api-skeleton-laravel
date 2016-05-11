<?php
namespace App\Core\Foundation;

use Illuminate\Foundation\Application as BaseApplication;

class Application extends BaseApplication
{
    /**
     * Return the application version
     *
     * @return string
     */
    public function version()
    {
        return parent::version().PHP_EOL.'<info>Meeting App</info> 0.1-dev';
    }
}