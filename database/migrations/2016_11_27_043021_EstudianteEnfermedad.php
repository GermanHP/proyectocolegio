<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EstudianteEnfermedad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EstudianteEnfermedad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Tratamiento', 500);
            $table->integer('idEstudiante')->unsigned();
            $table->foreign('idEstudiante') ->references('id')->on('Estudiante');
            $table->integer('idEnfermedad')->unsigned();
            $table->foreign('idEnfermedad') ->references('id')->on('Enfermedades');
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
        Schema::drop('EstudianteEnfermedad');
    }
}
