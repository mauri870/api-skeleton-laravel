<?php

namespace App\Applications\Dashboard\Http\Requests;

use App\Applications\Dashboard\Http\Requests\Base\BaseRequest;

class MailFormRequest extends BaseRequest
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
        switch ($this->method()) {
            case 'POST': {
                return [
                    'to'=>'required|email',
                    'cc'=>'email',
                    'bcc'=>'email',
                    'subject'=>'required',
                    'message'=>'required'
                ];
                break;
            }
        }
    }

    public function attributes()
    {
        return [
            'to'=>'Para',
            'cc'=>'Cópia',
            'bcc'=>'Cópia Oculta',
            'subject'=>'Assunto',
            'message'=>'Mensagem',
        ];
    }
}
