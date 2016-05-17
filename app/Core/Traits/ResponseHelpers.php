<?php

namespace App\Core\Traits;


trait ResponseHelpers
{
    public function ApiResponse($data = [], $status = 200)
    {
        if (!is_array($data)) {
            $data = ['message' => $data];
        }

        return response()->json(array_merge(['status_code' => $status], $data), $status);
    }
}