<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PadreEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padreestudiante', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idEstudiante')->unsigned();
            $table->foreign('idEstudiante') ->references('id')->on('estudiante');
            $table->integer('idPadre')->unsigned();
            $table->foreign('idPadre') ->references('id')->on('padredefamilia');
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
        Schema::drop('padreestudiante');
    }
}
