<?php

namespace App\Core\Http\Requests;

use Illuminate\Http\JsonResponse;
use App\Core\Traits\Rest\RestTrait;
use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
{
    use RestTrait;
    /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        if ($this->ajax() || $this->wantsJson() || $this->isApiCall($this)) {
            return response()->json(['message' => 'Validation failed', 'errors' => $errors], 422);
        }

        return $this->redirector->to($this->getRedirectUrl())
            ->withInput($this->except($this->dontFlash))
            ->withErrors($errors, $this->errorBag);
    }
}
