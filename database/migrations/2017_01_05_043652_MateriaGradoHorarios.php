<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaGradoHorarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiagradohorarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDiasDisponibles')->unsigned();
            $table->foreign('idDiasDisponibles') ->references('id')->on('diasdisponibles');
            $table->integer('idHorasDisponibles')->unsigned();
            $table->foreign('idHorasDisponibles') ->references('id')->on('horasdisponibles');
            $table->integer('idMateriaGrado')->unsigned()->nullable();
            $table->foreign('idMateriaGrado') ->references('id')->on('materiagrado');
            $table->string('Descripcion')->nullable();
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
        Schema::drop('materiagradohorarios');
    }
}
