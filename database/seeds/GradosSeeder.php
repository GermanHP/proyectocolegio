<?php

use Illuminate\Database\Seeder;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grados')->insert(array(
            'nombre' => 'Kinder',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('grados')->insert(array(
            'nombre' => 'Preparatoria',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('grados')->insert(array(
            'nombre' => 'Primero',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('grados')->insert(array(
            'nombre' => 'Segundo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('grados')->insert(array(
            'nombre' => 'Tercero',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('grados')->insert(array(
            'nombre' => 'Cuarto',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('grados')->insert(array(
            'nombre' => 'Quinto',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('grados')->insert(array(
            'nombre' => 'Sexto',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('grados')->insert(array(
            'nombre' => 'Septimo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('grados')->insert(array(
            'nombre' => 'Octavo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('grados')->insert(array(
            'nombre' => 'Noveno',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
