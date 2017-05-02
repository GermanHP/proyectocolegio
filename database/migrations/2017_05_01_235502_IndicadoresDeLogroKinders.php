<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IndicadoresDeLogroKinders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicadoresdelogros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreIndicador');
            $table->integer('idGrado')->unsigned();
            $table->foreign('idGrado') ->references('id')->on('gradoseccion');
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
        Schema::drop('areasdedesarrollokinders');
    }
}
