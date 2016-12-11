<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends BaseModel {

    protected $fillable = [
        'tipo_empresa','razao_social', 'nome_fantasia', 'ramo', 'cnpj', 'email', 'site', 'ender_lograd',
        'ender_num', 'ender_bairro', 'ender_compl', 'ender_estado', 'ender_cidade', 'ender_cep', 'telefone01',
        'telefone02', 'email', 'site', 'tipo_identificacao', 'num_identificacao', 'inscr_estadual',
        'qntdd_estagiarios', 'qntdd_colab', 'qntdd_colab_terc', 'seguradora', 'num_apolice', 'conveniada',
        'cadastro_entregue', 'logomarca', 'termo_qntdd_meses', 'termo_data', 'repres_nome', 'repres_cargo',
        'responsavel_rh_nome', 'responsavel_rh_email', 'responsavel_rh_tel'
    ];

    public function setTelefone02Attribute($telefone02)
    {
        $this->attributes['telefone02'] = $this->zeroIfBlank($telefone02);
    }

    public function setQntddEstagiariosAttribute($qntdd_estagiarios)
    {
        $this->attributes['qntdd_estagiarios'] = $this->zeroIfBlank($qntdd_estagiarios);
    }

    public function setQntddColabAttribute($qntdd_colab)
    {
        $this->attributes['qntdd_colab'] = $this->zeroIfBlank($qntdd_colab);
    }

    public function setQntddColabTercAttribute($qntdd_colab_terc)
    {
        $this->attributes['qntdd_colab_terc'] = $this->zeroIfBlank($qntdd_colab_terc);
    }

    public function setNumApoliceAttribute($num_apolice)
    {
        $this->attributes['num_apolice'] = $this->zeroIfBlank($num_apolice);
    }

    public function setTermoQntddMesesAttribute($termo_qntdd_meses)
    {
        $this->attributes['termo_qntdd_meses'] = $this->zeroIfBlank($termo_qntdd_meses);
    }

    public function setResponsavelRhTelAttribute($num_apolice)
    {
        $this->attributes['num_apolice'] = $this->zeroIfBlank($num_apolice);
    }
}