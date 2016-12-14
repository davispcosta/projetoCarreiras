<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagas extends Migration
{
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->char('tipo_estagio', 20);
            $table->char('titulo', 20);
            $table->char('cargo');
            $table->text('descricao');
            $table->char('data_publicacao');
            $table->char('data_final');

            $table->timestamps();
        });


        Schema::table('vagas', function (Blueprint $table){
            $table->integer('empresa_id')->unsigned()->index()->default(1);
            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas');
        });

    }


    public function down()
    {
        Schema::drop('vagas');
    }
}
