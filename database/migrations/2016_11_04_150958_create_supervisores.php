<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupervisores extends Migration
{

    public function up()
    {
        Schema::create('supervisores', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->char('curso');
            $table->char('nome');
            $table->char('cargo');
            $table->char('email');
            $table->integer('telefone');

            $table->timestamps();
        });

        Schema::table('supervisores', function (Blueprint $table){
            $table->integer('empresa_id')->unsigned()->index()->default(1);
            $table->foreign('empresa_id')
                ->references('id')
                ->on('empresas');
        });
    }


    public function down()
    {
        Schema::drop('supervisores');
    }
}
