<?php

use Illuminate\Database\Seeder;

class SeccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seccion')->insert(array(
            'nombre' => 'A',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
