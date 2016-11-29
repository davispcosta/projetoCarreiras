<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstagioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'bolsa_auxilio' => 'required|min:3',
            'auxil_transp_freq' => 'required',
            'auxil_transp_valor' => 'required',
            'auxil_alim_freq' => 'required',
            'auxil_alim_valor' => 'required',
            'data_inicio' => 'required',
            'data_termino' => 'required'
        ];
    }
}
