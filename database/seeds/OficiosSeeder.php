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
        DB::table('oficios')->insert(array(
            'nombre' => 'Maestro',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('oficios')->insert(array(
            'nombre' => 'Mecanico',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('oficios')->insert(array(
            'nombre' => 'Doctor',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('oficios')->insert(array(
            'nombre' => 'Albañil',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('oficios')->insert(array(
            'nombre' => 'Ama de Casa',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
