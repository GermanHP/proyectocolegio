<?php

use Illuminate\Database\Seeder;

class SeederUsuarioPrincipal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'nombre' => 'Alexander',
            'apellido'=>'Dominguez',
            'email'=>'todocyber100@gmail.com',
            'password'=>bcrypt('colegioTodociber'),
            'idTipoUsuario'=>5,
            'usuarioMoodle'=>'todociber',
            'passwordMoodle'=>'T0d0cib3r#1',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
