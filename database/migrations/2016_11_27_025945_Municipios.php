<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Municipios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->integer('idDepartamento')->unsigned();
            $table->foreign('idDepartamento') ->references('id')->on('Departamentos');
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
        Schema::drop('Municipios');
    }
}
