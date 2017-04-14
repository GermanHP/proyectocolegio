<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosBoleta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosboleta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Observaciones');
            $table->string('porcentajeAsistencia');
            $table->string('notaConducta');
            $table->integer('idEstudiante')->unsigned();
            $table->foreign('idEstudiante') ->references('id')->on('estudiante');
            $table->integer('idPeriodo')->unsigned();
            $table->foreign('idPeriodo') ->references('id')->on('periodos');
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
        Schema::drop('usuariosbloqueados');
    }
}
