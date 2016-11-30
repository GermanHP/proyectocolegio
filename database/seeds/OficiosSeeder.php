<?php

use Illuminate\Database\Seeder;

class OficiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Oficios')->insert(array(
            'nombre' => 'Maestro',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Oficios')->insert(array(
            'nombre' => 'Mecanico',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Oficios')->insert(array(
            'nombre' => 'Doctor',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Oficios')->insert(array(
            'nombre' => 'Albañil',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Oficios')->insert(array(
            'nombre' => 'Ama de Casa',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
