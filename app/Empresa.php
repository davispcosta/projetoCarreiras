<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model {

    protected $fillable = [
        'tipo_empresa','razao_social', 'nome_fantasia', 'ramo', 'cnpj', 'email', 'site', 'ender_lograd',
        'ender_num', 'ender_bairro', 'ender_compl', 'ender_estado', 'ender_cidade', 'ender_cep', 'telefone01',
        'telefone02', 'email', 'site', 'tipo_identificacao', 'num_identificacao', 'inscr_estadual',
        'qntdd_estagiarios', 'qntdd_colab', 'qntdd_colab_terc', 'seguradora', 'num_apolice', 'conveniada',
        'cadastro_entregue', 'logomarca', 'termo_qntdd_meses', 'termo_data', 'repres_nome', 'repres_cargo',
        'responsavel_rh_nome', 'responsavel_rh_email', 'responsavel_rh_tel'
    ];

}