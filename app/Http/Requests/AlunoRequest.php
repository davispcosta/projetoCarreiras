<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'email' => 'required|email',
            'endereco' => 'required|min:3',
            'telefone' => 'required|min:9',
            'cpf' => 'required|min:12|max:12',
            'identidade' => 'required|min:11|max:11',
            'semestre' => 'required',
            'matricula' => 'required',
        ];
    }
}
