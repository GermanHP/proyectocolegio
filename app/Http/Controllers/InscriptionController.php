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
}
