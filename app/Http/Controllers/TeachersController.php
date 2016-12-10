<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TeachersController extends Controller
{
    public function perfil(){
        return view('teachers.profile');
    }

    public function dashboard(){
        return view('teachers.data_teachers');
    }

    public function listadoMaestros(){
        return view('teachers.listado_maestros');
    }

    public function materiasImpartidas(){
        return view('teachers.materias_impartidas');
    }

    public function ingresarMateria(){
        return view('teachers.ingresar_materia');
    }
}
