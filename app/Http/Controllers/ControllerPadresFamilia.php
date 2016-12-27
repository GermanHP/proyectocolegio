<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Estadocivil;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Padredefamilium;
use App\Models\Sacramento;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControllerPadresFamilia extends Controller
{
    public function ActualizarPadre($id){
        $padreDeFamilia = Padredefamilium::find($id);
        $oficios = Oficio::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $departamentos = Departamento::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $municipios = Municipio::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $sacramentosRegistrados = Sacramento::all();
        $estadoCivil = Estadocivil::all();
        return view('PadresDeFamilia.ActualizarPadre',compact('oficios','departamentos', 'municipios','padreDeFamilia','sacramentosRegistrados','estadoCivil'));
    }

    public function UpdatePadre(Request $request, $id){

    }
}
