<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipousuario')->insert(array(
            'tipo' => 'Estudiante',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('tipousuario')->insert(array(
            'tipo' => 'Padre',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('tipousuario')->insert(array(
            'tipo' => 'Maestro',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('tipousuario')->insert(array(
            'tipo' => 'Secretaria',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('tipousuario')->insert(array(
            'tipo' => 'Director',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
