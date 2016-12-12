<?php

use Illuminate\Database\Seeder;

class SacramentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sacramento')->insert(array(
            'nombre' => 'Bautismo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('sacramento')->insert(array(
            'nombre' => 'Primera Comunion',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('sacramento')->insert(array(
            'nombre' => 'Confirma',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('sacramento')->insert(array(
            'nombre' => 'Matrimonio',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
