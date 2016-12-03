<?php

use Illuminate\Database\Seeder;

class TipoDireccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoDireccion')->insert(array(
            'nombre' => 'Nacimiento',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoDireccion')->insert(array(
            'nombre' => 'Vivienda',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoDireccion')->insert(array(
            'nombre' => 'Trabajo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoDireccion')->insert(array(
            'nombre' => 'EmergenciaContacto',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
