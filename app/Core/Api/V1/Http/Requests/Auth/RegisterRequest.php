<?php

namespace App\Core\Api\V1\Http\Requests\Auth;

use App\Core\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:users',
            'company_name' => 'required|unique:users',
            'cnpj' => 'required|cnpj',
            'address' => 'required',
            'city' => 'required',
            'telephone' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
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
            'company_name' => 'razão social',
            'cnpj' => 'cnpj',
            'address' => 'endereço',
            'city' => 'cidade',
            'telephone' => 'telefone',
            'email' => 'email',
            'password' => 'senha'
        ];
    }
}
