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
        DB::table('Sacramento')->insert(array(
            'nombre' => 'Bautismo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('Sacramento')->insert(array(
            'nombre' => 'Primera Comunion',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));DB::table('Sacramento')->insert(array(
            'nombre' => 'Confirma',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
