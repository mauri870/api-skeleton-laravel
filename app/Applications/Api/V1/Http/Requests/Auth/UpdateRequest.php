<?php

namespace App\Applications\Api\V1\Http\Requests\Auth;

use App\Core\Http\Requests\Request;

class UpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'unique:users,name,'.auth()->user()->id,
            'address' => '',
            'telephone' => '',
            'email' => 'email|unique:users,email,'.auth()->user()->id
        ];
    }

    /**
     * Set custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'nome',
            'address' => 'endereço',
            'telephone' => 'telefone',
            'email' => 'email',
        ];
    }
}
