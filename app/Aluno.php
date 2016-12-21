<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome', 'email', 'endereco', 'telefone', 'cpf', 'identidade', 'semestre', 'matricula'
    ];
}
