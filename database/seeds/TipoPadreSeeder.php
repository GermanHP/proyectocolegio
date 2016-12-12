<?php

use Illuminate\Database\Seeder;

class TipoPadreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipopadre')->insert(array(
            'tipo' => 'Padre',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('tipopadre')->insert(array(
            'tipo' => 'Madre',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('tipopadre')->insert(array(
            'tipo' => 'Encargado',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
