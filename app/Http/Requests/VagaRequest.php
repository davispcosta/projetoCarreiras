<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VagaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'tipo_estagio' => 'required',
            'titulo' => 'required',
            'cargo' => 'required',
            'descricao' => 'required',
            'data_publicacao' => 'required',
            'data_final' => 'required',
            'empresa_id' => 'required'
        ];
    }
}
