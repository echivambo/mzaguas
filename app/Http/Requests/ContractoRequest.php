<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bairro'=>'required|min:10|alpha'
            'casa'=>'required|min:10|alpha'
            'rua'=>'required|alpha'
            'nome_cliente'=>'required|min:5|alpa'
            
        ];
    }
}
