<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatriculaDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MatriculaDocumento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMatricula')->unsigned();
            $table->foreign('idMatricula') ->references('id')->on('Matriculas');
            $table->integer('idDocumento')->unsigned();
            $table->foreign('idDocumento') ->references('id')->on('Documentos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MatriculaDocumento');
    }
}
