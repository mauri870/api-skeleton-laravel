<?php

namespace App\Core\Traits;

use Exception;
use Illuminate\Http\Request;
use Whoops\Handler\PrettyPageHandler;

trait RenderExceptionWithWhoops
{
    /**
     * Render an exception using Whoops.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $e
     * @return \Illuminate\Http\Response
     */
    protected function renderExceptionWithWhoops(Request $request, Exception $e)
    {
        $whoops = new \Whoops\Run;

        $whoops->pushHandler(new PrettyPageHandler());

        return response(
            $whoops->handleException($e),
            $e->getStatusCode(),
            $e->getHeaders()
        );
    }
}