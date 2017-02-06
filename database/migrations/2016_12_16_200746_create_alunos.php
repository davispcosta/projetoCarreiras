<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunos extends Migration
{

    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('password');
            $table->string('telefone');
            $table->string('cpf')->unique();
            $table->char('identidade', 11);
            $table->integer('semestre');
            $table->integer('matricula');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('alunos', function (Blueprint $table){
            $table->integer('curso_id')->unsigned()->index()->default(1);
            $table->foreign('curso_id')
                ->references('id')
                ->on('cursos');
        });
    }



    public function down()
    {
        Schema::drop('alunos');
    }
}
