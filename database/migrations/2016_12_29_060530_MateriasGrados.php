<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriasGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiagrado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idGradoSeccion')->unsigned();
            $table->foreign('idGradoSeccion') ->references('id')->on('gradoseccion');

            $table->integer('idMateria')->unsigned();
            $table->foreign('idMateria') ->references('id')->on('materias');

            $table->integer('idMaestroResponsable')->unsigned()->nullable();
            $table->foreign('idMaestroResponsable') ->references('id')->on('maestros');

            $table->string('Descripcion')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });    }

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
