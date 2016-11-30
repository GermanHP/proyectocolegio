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
        DB::table('TipoPadre')->insert(array(
            'tipo' => 'Padre',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoPadre')->insert(array(
            'tipo' => 'Madre',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoPadre')->insert(array(
            'tipo' => 'Encargado',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
