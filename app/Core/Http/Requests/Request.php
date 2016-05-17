<?php

namespace App\Core\Http\Requests;

use App\Core\Traits\Rest\RestTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Redirector;
use App\Core\Traits\Rest\ResponseHelpers;
use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    use RestTrait, ResponseHelpers;

    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return JsonResponse | Redirector
     */
    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson() || $this->isApiCall($this)) {
            return $this->ApiResponse(['message' => 'Validation failed', 'errors' => $errors], 422);
        }

        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
