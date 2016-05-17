<?php

namespace App\Core\Traits;


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
        if (!is_array($data)) {
            $data = ['message' => $data];
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
}