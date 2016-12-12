<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idCurso',500)->nullable();
            $table->string('Observaciones')->nullable();
            $table->integer('idEstudiante')->unsigned();
            $table->foreign('idEstudiante') ->references('id')->on('estudiante');
            $table->integer('idGradoSeccion')->unsigned();
            $table->foreign('idGradoSeccion') ->references('id')->on('gradoseccion');
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
        Schema::drop('matriculas');
    }
}
