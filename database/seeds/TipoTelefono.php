<?php

use Illuminate\Database\Seeder;

class TipoTelefono extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoTelefonos')->insert(array(
            'tipo' => 'Casa',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoTelefonos')->insert(array(
            'tipo' => 'Celular',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoTelefonos')->insert(array(
            'tipo' => 'Trabajo',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('TipoTelefonos')->insert(array(
            'tipo' => 'EmergenciaContacto',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
