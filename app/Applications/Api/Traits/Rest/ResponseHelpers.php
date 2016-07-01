<?php

namespace App\Applications\Api\Traits\Rest;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

trait ResponseHelpers
{
    /**
     * Return a standardized json response
     *
     * @param array $data
     * @param int $status
     * @return \Illuminate\Http\JsonResponse
     */
    public function ApiResponse($data = [], $status = 200)
    {
        switch ($data) {
            case ($data instanceof Model):
                $data = ['data' => $data];
                break;
            case($data instanceof AbstractPaginator):
                $data = $data->toArray();
                break;
            case (!is_array($data)):
                $data = ['message' => $data];
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
    protected function badRequest($message='Bad request', $statusCode=400)
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
    protected function modelNotFound($message='Record not found', $statusCode=404)
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
    protected function notFound($message='Not found', $statusCode=404)
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
    protected function okButNoContent($message=null, $statusCode=204)
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
    protected function methodNotAllowed($message='Method not allowed', $statusCode=405)
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
    protected function downForMaintenence($message='Server temporarily down for maintenence', $statusCode=503)
    {
        return $this->ApiResponse($message, $statusCode);
    }
}