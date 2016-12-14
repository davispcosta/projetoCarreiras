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
            $table->string('email');
            $table->string('endereco');
            $table->char('telefone', 12);
            $table->char('cpf', 12)->unique();
            $table->char('identidade', 11);
            $table->string('curso');
            $table->integer('semestre');
            $table->integer('matricula');

            $table->rememberToken();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::drop('alunos');
    }
}
