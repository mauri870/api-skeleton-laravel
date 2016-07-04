<?php

namespace App\Applications\Api\Traits\Rest;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;
use Symfony\Component\HttpFoundation\Response;

trait ResponseHelpers
{
    /**
     * Return a standardized json response
     *
     * @param array $data
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function ApiResponse($data = null, $status = Response::HTTP_OK)
    {
        switch ($data) {
            case ($data instanceof Model):
                $data = ['data' => $data];
                break;
            case($data instanceof AbstractPaginator):
                $data = $data->toArray();
                break;
            case (!is_array($data)):
                $data = ['message' => ($data != null) ? $data : Response::$statusTexts[$status]];
                break;
        }

        return response()->json(array_merge(['status_code' => $status], $data), $status);
    }

    /**
     * Returns json response for generic bad request.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function badRequest($message = null, $statusCode = Response::HTTP_BAD_REQUEST)
    {
        return $this->ApiResponse($message, $statusCode);
    }

    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function modelNotFound($message = null, $statusCode = Response::HTTP_NOT_FOUND)
    {
        return $this->ApiResponse($message, $statusCode);
    }

    /**
     * Returns json response for a page not found
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function notFound($message = null, $statusCode = Response::HTTP_NOT_FOUND)
    {
        return $this->ApiResponse($message, $statusCode);
    }

    /**
     * Returns json response for a successfull request
     * but no contains response content
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function okButNoContent($message = '', $statusCode = Response::HTTP_NO_CONTENT)
    {
        return $this->ApiResponse($message, $statusCode);
    }

    /**
     * Returns json response for a method not allowed
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function methodNotAllowed($message = null, $statusCode = Response::HTTP_METHOD_NOT_ALLOWED)
    {
        return $this->ApiResponse($message, $statusCode);
    }

    /**
    * Returns json response for a maintenence mode
    *
    * @param string $message
    * @param int $statusCode
    * @return \Illuminate\Http\JsonResponse
    */
    protected function downForMaintenence($message = null, $statusCode = Response::HTTP_SERVICE_UNAVAILABLE)
    {
        return $this->ApiResponse($message, $statusCode);
    }
}