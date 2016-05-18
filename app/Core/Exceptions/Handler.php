<?php

namespace App\Core\Exceptions;

use Exception;
use App\Core\Traits\Rest\RestTrait;
use App\Core\Exceptions\Traits\RenderExceptionWithWhoops;
use App\Core\Exceptions\Traits\RestExceptionHandlerTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    use RestTrait, RestExceptionHandlerTrait, RenderExceptionWithWhoops;

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class,
        ModelNotFoundException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($this->isApiCall($request)) {
            return $this->getJsonResponseForException($request, $e);
        }

        if (config('app.debug') && app()->environment() != 'production') {
            return $this->renderExceptionWithWhoops($request, $e);
        }

        return parent::render($request, $e);
    }
}
