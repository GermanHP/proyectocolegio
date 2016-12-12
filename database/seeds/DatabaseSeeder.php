<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Departamentos::class);
        $this->call(MunicipioSeeder::class);
        $this->call(TipoTelefono::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(TipoPadreSeeder::class);
        $this->call(SacramentosSeeder::class);
        $this->call(OficiosSeeder::class);
        $this->call(DocumentosSeeder::class);
        $this->call(EstadoCivilSeeder::class);
        $this->call(TipoDireccionSeeder::class);
        $this->call(GradosSeeder::class);
        $this->call(SeccionesSeeder::class);

    }
}
