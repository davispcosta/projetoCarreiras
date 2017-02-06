<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComunicados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunicados', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('assunto');
            $table->string('texto');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('comunicados', function (Blueprint $table){
            $table->integer('curso_id')->unsigned()->index()->default(1);
            $table->foreign('curso_id')
                ->references('id')
                ->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
