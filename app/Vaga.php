<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $fillable = [
        'tipo_estagio', 'titulo', 'cargo', 'descricao', 'data_publicacao', 'data_final'
    ];
}
