<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagamentosRequest extends FormRequest
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
            
            'nr_comprovativo'=>'required|min:30|alpha_num'
            'data_pagamento'=>'required|min:30|date'
           'tipo_pagamento'=>'required|min:30|alpha'
           'valor'=>'required|min:30|alpha_num'
           
    }
}
