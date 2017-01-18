<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {

            $table->increments('id')->unique();
            $table->string('tipo_empresa');
            $table->string('razao_social')->unique();
            $table->string('nome_fantasia');
            $table->string('ramo');

            // --> Endereço <--
            $table->string('ender_lograd');
            $table->string('ender_num');
            $table->string('ender_bairro');
            $table->string('ender_compl')->nullable();
            $table->string('ender_estado');
            $table->string('ender_cidade');
            $table->string('ender_cep');

            // --> Contatos <--
            $table->integer('telefone01');
            $table->integer('telefone02')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('site')->nullable();

            $table->string('tipo_identificacao');
            $table->string('num_identificacao');
            $table->string('inscr_estadual')->nullable();
            $table->integer('qntdd_estagiarios')->nullable();
            $table->integer('qntdd_colab')->nullable();
            $table->integer('qntdd_colab_terc')->nullable();
            $table->string('seguradora')->nullable();
            $table->integer('num_apolice')->nullable();
            $table->string('logomarca')->nullable();

            // --> Termo de Compromisso <--
            $table->integer('termo_qntdd_meses')->nullable();
            $table->string('termo_data')->nullable();

            // --> Representantes e Responsáveis <--
            $table->string('repres_nome')->nullable();
            $table->string('repres_cargo')->nullable();
            $table->string('responsavel_rh_nome')->nullable();
            $table->string('responsavel_rh_email')->nullable();
            $table->integer('responsavel_rh_tel')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('empresas');
    }
}
