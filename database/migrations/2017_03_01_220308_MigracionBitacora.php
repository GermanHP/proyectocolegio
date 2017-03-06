<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionBitacora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bitacora', function (Blueprint $table) {
            $table->increments('id');
            $table->string('idUsuario')->nullable();
            $table->string('Acccion')->nullable();
            $table->string('Otra Informacion')->nullable();
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
        Schema::drop('Bitacora');
    }
}
