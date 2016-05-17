<?php

namespace App\Core\Traits\Rest;

use Illuminate\Http\Request;

trait RestTrait
{
    /**
     * Determines if request is an api call.
     *
     * If the request URI contains '/api/v'.
     *
     * @param Request $request
     * @return bool
     */
    protected function isApiCall(Request $request)
    {
        return $request->is('api/*');
    }
}