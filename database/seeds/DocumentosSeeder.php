<?php

use Illuminate\Database\Seeder;

class DocumentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Documentos')->insert(array(
            'nombre' => 'Partida de Nacimiento Original',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Documentos')->insert(array(
            'nombre' => 'Certificado de Último Grado Aprobado',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Documentos')->insert(array(
            'nombre' => 'Fotocopia de los Padres o Responsable',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('Documentos')->insert(array(
            'nombre' => '2 Fotografías Recientes',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
    }
}
