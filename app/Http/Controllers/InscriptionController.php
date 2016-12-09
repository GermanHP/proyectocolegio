<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Direccione;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Gradoseccion;
use App\Models\Historicoestudiante;
use App\Models\Matricula;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Sacramentousuario;
use App\Models\User;
use App\Utilities\Action;
use DB;
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
        $municipios = Municipio::where('id_departamento','=',9)->orderBy('nombre', 'ASC')->lists('nombre', 'id');


        $grados = DB::table('gradoseccion')
            ->join('grados', 'grados.id', '=', 'gradoseccion.idGrado')
            ->join('seccion', 'seccion.id', '=', 'gradoseccion.idSeccion')
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->lists('nombre', 'id');
        $gradosAntiguos = Grado::all()->lists('nombre','id');
        $oficios = Oficio::orderBy('nombre', 'ASC')->lists('nombre', 'id');

        return view('matricula.formulario', compact('departamentos','grados','oficios','municipios','gradosAntiguos'));
    }
    public function registrarEstudiante(Requests\ValidacionMatriculaNueva $request){
        $validado = $this->ValidarEncargado($request);
        if(!$validado){
            return redirect()->back()->withInput()->withErrors("Se necesita ingresar datos completos de al menos un responsable");
        }
        $action = new Action();
        $password = bcrypt($action->makePassword());


        $carnetEstudiate = $action->generarCarnet($request['nombreEstudiante'],$request['apellido']);
        $emailEstudiante =$request['correoEstudiante'];
        $emailPadre ="";
        $emailMadre ="";
        $emailResponsable ="";


        if($request['correoEstudiante']==NULL){
            $emailEstudiante = $carnetEstudiate.'@colegiosjb.net';
        }
        $usuarioEstudiante = new User();
        $usuarioEstudiante->fill([
            'nombre'=>$request['nombreEstudiante'],
            'apellido'=>$request['apellido'],
            'genero'=>1,
            'email'=>$emailEstudiante,
            'password'=>$carnetEstudiate,
            'idTipousuario'=>1,
        ]);
        $usuarioEstudiante->save();
        $estudiante = new Estudiante();
        $estudiante->fill([
            'fechaNacimiento'=>$request['fechaNacimientoEstudiante'],
            'parvularia'=>$request['estudioP'],
            'retirada'=>$request['salidaRadio'],
            'PersonaAutorizada'=>$request['personaAutorizada'],
            'PersonaEmergencia'=>$request['CasoEmergenciaNombre'],
            'Carnet'=>$carnetEstudiate,
            'idUsuario'=>$usuarioEstudiante->id,
        ]);
        $estudiante->save();

        if($request['lugarNacimiento']!=NULL){
            $direccionNacimiento = new Direccione();
            $direccionNacimiento->fill([
                'detalle'=>$request['lugarNacimiento'],
                'idMunicipio'=>$request['municipio'],
                'idTipoDireccion'=>1,
                'idUsuario'=>$usuarioEstudiante->id,
            ]);
            $direccionNacimiento->save();
        }


        if(count ($request['sacramentosEstudiante'])>0){
            $sacramentosEstudiante = new Sacramentousuario();
            foreach ($request['sacramentosEstudiante'] as $sacramento){
                $sacramentosEstudiante->fill([
                    'idSacramento'=>$sacramento,
                    'idUsuario'=>$usuarioEstudiante->id,
                ]);
                $sacramentosEstudiante->save();
            }
        }


        if($request['residenciaEstudianteEmergencia']!=NULL){
            $direccionEmergencia = new Direccione();
            $direccionEmergencia->fill([
                'detalle'=>$request['residenciaEstudianteEmergencia'],
                'idMunicipio'=>$request['municipioVivienda'],
                'idTipoDireccion'=>4,
                'idUsuario'=>$usuarioEstudiante->id,
            ]);
            $direccionEmergencia->save();
        }

        if($request['residenciaEstudiante']!=NULL){
            $direccionResidenciaEstudiante = new Direccione();
            $direccionResidenciaEstudiante->fill([
                'detalle'=>$request['residenciaEstudiante'],
                'idMunicipio'=>$request['municipioVivienda'],
                'idTipoDireccion'=>2,
                'idUsuario'=>$usuarioEstudiante->id,
            ]);
            $direccionResidenciaEstudiante->save();
        }

        if($request['NombreEscuelaAnterior']!=NULL && $request['gradoAnterior'] !=NULL){
            $historialEstudiante = new Historicoestudiante();
            $historialEstudiante->fill([
                'InstitucionAnteior'=>$request['NombreEscuelaAnterior'],
                'GradoAnterior'=>$request['gradoAnterior'],
                'idEstudiante'=> $estudiante->id,
            ]);
            $historialEstudiante->save();
        }

        $matricula = new Matricula();



        flash('Registro Exitoso', 'success');
        return redirect()->back();

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

    public function asignarGradoEstudiante(){
        return view('matricula.formularios.alumno_grado');
    }

    private  function ValidarEncargado(Request $request){
        $correcto = true;
        if($request['nombrePadre']==null&&$request['nombreMadre']==null&&$request['nombreResponsable']==null){
            $correcto = false;
        }
        if($request['apellidosPadre']==null&&$request['apellidoMadre']==null&&$request['apellidoResponsable']==null){
            $correcto = false;
        }

        return $correcto;
    }
}
