<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstagios extends Migration
{

    public function up()
    {
        Schema::create('estagios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->double('bolsa_auxilio');
            $table->char('auxil_transp_freq');
            $table->double('auxil_transp_valor');
            $table->char('auxil_alim_freq');
            $table->double('auxil_alim_valor');
            $table->char('data_inicio');
            $table->char('data_termino');
            $table->boolean('resicao');
            $table->boolean('estagio_fechado');
            $table->boolean('termo_entregue');

            $table->timestamps();
        });

        Schema::table('estagios', function (Blueprint $table){
            $table->integer('empresa_id')->unsigned()->index()->default(1);
            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas');
        });

        Schema::table('estagios', function (Blueprint $table){
            $table->integer('aluno_id')->unsigned()->index()->default(1);
            $table->foreign('aluno_id')
                ->references('id')
                ->on('alunos');
        });

    }


    public function down()
    {
        Schema::drop('estagios');
    }
}
