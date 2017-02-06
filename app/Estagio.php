<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estagio extends BaseModel
{
    protected $fillable = [
        'bolsa_auxilio', 'auxil_transp_freq', 'auxil_transp_valor', 'auxil_alim_freq', 'auxil_alim_valor', 'data_inicio', 'data_termino', 'resicao', 'estagio_fechado', 'termo_entregue'
    ];

    public function setResicaoAttribute($resicao)
    {
        $this->attributes['resicao'] = $this->zeroIfNull($resicao);
    }
}
