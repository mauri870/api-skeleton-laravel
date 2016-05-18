<?php

namespace App\Applications\Api\V1\Http\Requests\Auth;

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
            'address' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
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
            'city' => 'cidade',
            'telephone' => 'telefone',
            'email' => 'email',
            'password' => 'senha',
            'password_confirmation' => 'confirmação de senha'
        ];
    }
}
