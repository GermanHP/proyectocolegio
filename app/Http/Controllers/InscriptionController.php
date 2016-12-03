<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Grado;
use App\Models\Municipio;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;

class InscriptionController extends Controller
{
    public function inscription(){
        return view('matricula.inscripcion');
    }

    public function formulary(){
        $departamentos = Departamento::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $grados = Grado::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('matricula.formulario', compact('departamentos','grados'));
    }
    public function registrarEstudiante(Requests\ValidacionMatriculaNueva $request){



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

    public function getMunicipios(Request $request)
    {

        try {


            $municipios = Municipio::where('id_departamento', $request['id'])->get();

            if (count($municipios) > 0) {

                return response()->json($municipios, 200);

            } else {

                return response()->json(['error' => 'No se encontraron municipios para este departamento'], 450);
            }
        } catch (Exception $e) {

            return response()->json(['error' => 'Ocurrio un error en la consulta'], 450);
        }


    }
}
