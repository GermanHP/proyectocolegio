<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('matricula.inscripcion');
    }

    public function formulary(){
        return view('matricula.formulario');
    }

    public function afiche(){
        return view('matricula.propuesta');
    }

    public function dash_inscription(){
        return view('matricula.dash_matricula');
    }

    public function local_inscription(){
        return view('matricula.matricula_local');
    }

    public function registro(){
        return view('matricula.registro_matricula');
    }

    public function noticias(){
        return view('matricula.noticias');
    }
}
