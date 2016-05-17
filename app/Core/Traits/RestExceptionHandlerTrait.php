<?php

namespace App\Core\Traits;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

trait RestExceptionHandlerTrait
{
    use ResponseHelpers;

    /**
     * Creates a new JSON response based on exception type.
     *
     * @param Request $request
     * @param Exception $e
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getJsonResponseForException(Request $request, Exception $e)
    {
        switch(true) {
            case $this->isModelNotFoundException($e):
                $response = $this->modelNotFound();
                break;
            case $this->isNotFoundHttpException($e):
                $response = $this->notFound();
                break;
            case $this->isMethodNotAllowedHttpException($e):
                $response = $this->methodNotAllowed();
                break;
            default:
                $response = $this->badRequest();
        }

        return $response;
    }

    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Exception $e
     * @return bool
     */
    protected function isModelNotFoundException(Exception $e)
    {
        return $e instanceof ModelNotFoundException;
    }

    /**
     * Determines if the given exception is a NotFoundHttpException
     *
     * @param Exception $e
     * @return bool
     */
    protected function isNotFoundHttpException(Exception $e)
    {
        return $e instanceof NotFoundHttpException;
    }

    /**
     * Determines if the given exception is a MethodNotAllowedException
     *
     * @param Exception $e
     * @return bool
     */
    protected function isMethodNotAllowedHttpException(Exception $e)
    {
        return $e instanceof MethodNotAllowedHttpException;
    }
}