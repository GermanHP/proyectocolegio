<?php

use Illuminate\Database\Seeder;

class SeederDiasDisponibles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Lunes',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Martes',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Miercoles',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Jueves',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Viernes',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Sabado',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('diasdisponibles')->insert(array(
            'nombre' => 'Domingo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

    }
}
