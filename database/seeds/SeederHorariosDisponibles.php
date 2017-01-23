<?php

use Illuminate\Database\Seeder;

class SeederHorariosDisponibles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Tercer Ciclo
        DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '7:00',
            'horaFin' => '7:45',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '7:45',
            'horaFin' => '8:30',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '8:30',
            'horaFin' => '9:15',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '9:15',
            'horaFin' => '9:30',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '9:30',
            'horaFin' => '10:15',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '10:15',
            'horaFin' => '10:30',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '10:30',
            'horaFin' => '11:15',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '11:15',
            'horaFin' => '12:00',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '12:00',
            'horaFin' => '1:10',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '1:10',
            'horaFin' => '2:00',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '2:00',
            'horaFin' => '2:50',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '2:50',
            'horaFin' => '3:15',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '3:15',
            'horaFin' => '4:00',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        )); DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '4:00',
            'horaFin' => '4:45',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));

        //Segundo Ciclo
        DB::table('horasdisponibles')->insert(array(
            'horaInicio' => '12:45',
            'horaFin' => '1:30',
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ));
        DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '1:30',
        'horaFin' => '2:15',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '2:30',
        'horaFin' => '3:15',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '3:15',
        'horaFin' => '4:00',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '4:15',
        'horaFin' => '5:00',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '5:00',
        'horaFin' => '5:30',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));




    //Horarios Primer Ciclo
    DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '7:00',
        'horaFin' => '7:50',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '7:50',
        'horaFin' => '8:40',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '9:00',
        'horaFin' => '9:45',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '9:45',
        'horaFin' => '10:30',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '10:45',
        'horaFin' => '11:30',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));DB::table('horasdisponibles')->insert(array(
        'horaInicio' => '11:30',
        'horaFin' => '12:00',
        'created_at' => new DateTime,
        'updated_at' => new DateTime
    ));






    }
}
