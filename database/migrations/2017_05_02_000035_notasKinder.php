<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotasKinder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaskinder', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idGrado')->unsigned();
            $table->foreign('idGrado') ->references('id')->on('gradoseccion');
            $table->integer('idIndicador')->unsigned();
            $table->foreign('idIndicador') ->references('id')->on('indicadoresdelogros');
            $table->integer('idEstudiante')->unsigned();
            $table->foreign('idEstudiante') ->references('id')->on('estudiante');
            $table->integer('idPeriodo')->unsigned();
            $table->foreign('idPeriodo') ->references('id')->on('periodos');
            $table->integer('idTipoNotaPrepa')->unsigned();
            $table->foreign('idTipoNotaPrepa') ->references('id')->on('tipoNotaPrepa');
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
        Schema::drop('notaskinder');
    }
}
