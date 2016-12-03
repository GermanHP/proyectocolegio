<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HistoricoEstudianteNuevo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('HistoricoEstudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('InstitucionAnteior',500);
            $table->string('GradoAnterior',500);
            $table->integer('idEstudiante')->unsigned();
            $table->foreign('idEstudiante') ->references('id')->on('Estudiante');
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
        Schema::drop('HistoricoEstudiante');
    }
}
