<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'tipo_empresa' => 'required',
            'razao_social' => 'required|min:3',
            'nome_fantasia' => 'required|min:3',
            'ramo' => 'required',
            'ender_lograd' => 'required',
            'ender_num' => 'required',
            'ender_bairro' => 'required',
            'ender_estado' => 'required',
            'ender_cidade' => 'required',
            'ender_cep' => 'required',
            'telefone01' => 'required',
            'email' => 'email',
            'tipo_identificacao' => 'required',
            'num_identificacao' => 'required',

        ];
    }
}
