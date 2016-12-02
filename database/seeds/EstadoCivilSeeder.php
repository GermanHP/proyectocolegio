<?php

use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EstadoCivil')->insert(array(
            'nombre' => 'Soltero/a',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('EstadoCivil')->insert(array(
            'nombre' => 'Casado/a',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('EstadoCivil')->insert(array(
            'nombre' => 'Divorciado/a',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('EstadoCivil')->insert(array(
            'nombre' => 'Viudo/a',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('EstadoCivil')->insert(array(
            'nombre' => 'Acompañado/a',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
