<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaturaRequest extends FormRequest
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
           'leitura'=>'required|min:30|alpha_num'
           'consumo_registado'=>'required|min:30|alpha_num'
           'valor_pagar'=>'required|min:30|alpha_num'
           'data_leitura'=>'required|min:30|date'
           'data_limite'=>'required|min:30|date'
           'multa'=>'required|min:30|alpha_num'
        ];
    }
}
