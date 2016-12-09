<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Direccione;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Gradoseccion;
use App\Models\Historicoestudiante;
use App\Models\Matricula;
use App\Models\Matriculadocumento;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Padredefamilium;
use App\Models\Padreestudiante;
use App\Models\Sacramentousuario;
use App\Models\Telefono;
use App\Models\User;
use App\Utilities\Action;
use DB;
use Exception;
use Illuminate\Http\Request;

use App\Http\Requests;
use phpDocumentor\Reflection\Types\Null_;

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
            return redirect()->back()->withInput()->withErrors("Se necesitan completar datos o son datos invalidos");
        }
        $action = new Action();
        $password = bcrypt($action->makePassword());


        $carnetEstudiate = $action->generarCarnet($request['nombreEstudiante'],$request['apellido']);
        $emailEstudiante =$request['correoEstudiante'];



        if($request['correoEstudiante']==NULL){
            $emailEstudiante = $carnetEstudiate.'@colegiosjb.net';
        }
        $usuarioEstudiante = new User();
        $usuarioEstudiante->fill([
            'nombre'=>$request['nombreEstudiante'],
            'apellido'=>$request['apellido'],
            'genero'=>1,
            'email'=>$emailEstudiante,
            'password'=>bcrypt($carnetEstudiate),
            'idTipousuario'=>1,
        ]);
        $usuarioEstudiante->save();
        $personaAutorizada=$request['personaAutorizada'];
        if($request['salidaRadio']==1){
            $personaAutorizada =" ";
        }

        $casoEmergencia= $request['CasoEmergenciaNombre'];
        if($casoEmergencia==NULL){
            $casoEmergencia=" ";
        }
        $estudiante = new Estudiante();
        $estudiante->fill([
            'fechaNacimiento'=>$request['fechaNacimientoEstudiante'],
            'parvularia'=>$request['estudioP'],
            'retirada'=>$request['salidaRadio'],
            'PersonaAutorizada'=>$personaAutorizada,
            'PersonaEmergencia'=>$casoEmergencia,
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
        if($request['TelefonoEmergenciaNombre']!=NULL){
            $telefonoEmergencia = new Telefono();
            $telefonoEmergencia->fill([
                'telefono'=>$request['TelefonoEmergenciaNombre'],
                'idTipoTelefono'=>4,
                'idUsuario'=>$usuarioEstudiante->id,
            ]);
            $telefonoEmergencia->save();
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
        $observaciones = $request['observacionesMatricula'];
        if($observaciones==NULL){
            $observaciones=" ";
        }
        $matricula->fill([
            'Observaciones'=>$observaciones,
            'idEstudiante'=>$estudiante->id,
            'idGradoSeccion'=>$request['gradoNuevo']
        ]);
        $matricula->save();


        if(count ($request['DocumentosEntregados'])>0){
            foreach ($request['DocumentosEntregados'] as $documento){
                $DocumentosMatricula = new Matriculadocumento();
                $DocumentosMatricula->fill([
                    'idMatricula'=>$matricula->id,
                    'idDocumento'=>$documento
                ]);
                $DocumentosMatricula->save();
            }
        }


        //Inscripcion de Padre
        if($request['nombrePadre']!=NULL&&$request['apellidosPadre']!=NULL && $request['DUIpadre']!=NULL ){
            $emailPadre= $request['correoPadre'];
            if($emailPadre==NULL){
                $emailEstudiante = $carnetEstudiate.'@padrescolegiosjb.net';
            }

            $usuarioPadre = new User();
            $usuarioPadre->fill([
                'nombre'=>$request['nombrePadre'],
                'apellido'=>$request['apellidosPadre'],
                'genero'=>1,
                'email'=>$emailEstudiante,
                'password'=>bcrypt($request['DUIpadre']),
                'idTipousuario'=>2,
            ]);
            $usuarioPadre->save();

            $padreDeFamilia = new Padredefamilium();
            $padreDeFamilia->fill([
                'fechaNacimiento'=>$request['fechaNacimientoPadre'],
                'DUI'=>$request['DUIpadre'],
                'nombreLugarTrabajo'=>$request['lugarTrabajoPadre'],
                'idUsuario'=>$usuarioPadre->id,
                'idOficio'=>$request['oficiosPadre'],
                'idTipoPadre'=>1,
                'idEstadoCivil'=>$request['estadoCivilPadre']
            ]);

            $padreDeFamilia->save();

            if($request['telefonoTrabajoPadre']!=NULL){
                $telefonoPadre = new Telefono();
                $telefonoPadre->fill([
                    'telefono'=>$request['telefonoTrabajoPadre'],
                'idTipoTelefono'=>2,
                'idUsuario'=>$usuarioPadre->id,
                ]);
                $telefonoPadre->save();
            }
            if($request['DirecciónPadre']!=NULL){
                $direccioNpadre = new Direccione();
                $direccioNpadre->fill([
                    'detalle'=>$request['DirecciónPadre'],
                    'idMunicipio'=>$request['municipioTrabajoPadre'],
                    'idTipoDireccion'=>3,
                    'idUsuario'=>$usuarioPadre->id
                ]);
                $direccioNpadre->save();
            }

            if(count ($request['sacramentosPadre'])>0){
                $sacramentosPadres = new Sacramentousuario();
                foreach ($request['sacramentosPadre'] as $sacramento){
                    $sacramentosPadres->fill([
                        'idSacramento'=>$sacramento,
                        'idUsuario'=>$usuarioPadre->id,
                    ]);
                    $sacramentosPadres->save();
                }
            }

            $padreEstudiante = new Padreestudiante();
            $padreEstudiante->fill([
                'idEstudiante'=>$estudiante->id,
                'idPadre'=>$padreDeFamilia->id
            ]);
            $padreEstudiante->save();

        }



        //Inscripcion de Madres
        if($request['nombreMadre']!=NULL&&$request['apellidoMadre']!=NULL && $request['DUIMadre']!=NULL ){
            $emailPadre= $request['correoMadre'];
            if($emailPadre==NULL){
                $emailEstudiante = $carnetEstudiate.'@madrescolegiosjb.net';
            }

            $usuarioPadre = new User();
            $usuarioPadre->fill([
                'nombre'=>$request['nombreMadre'],
                'apellido'=>$request['apellidoMadre'],
                'genero'=>2,
                'email'=>$emailEstudiante,
                'password'=>bcrypt($request['DUIMadre']),
                'idTipousuario'=>2,
            ]);
            $usuarioPadre->save();

            $padreDeFamilia = new Padredefamilium();
            $padreDeFamilia->fill([
                'fechaNacimiento'=>$request['fechaNacimientoMadre'],
                'DUI'=>$request['DUIMadre'],
                'nombreLugarTrabajo'=>$request['lugarTrabajoMadre'],
                'idUsuario'=>$usuarioPadre->id,
                'idOficio'=>$request['oficioMadre'],
                'idTipoPadre'=>1,
                'idEstadoCivil'=>$request['estadoCivilMadre']
            ]);

            $padreDeFamilia->save();

            if($request['telefonoMadre']!=NULL){
                $telefonoPadre = new Telefono();
                $telefonoPadre->fill([
                    'telefono'=>$request['telefonoMadre'],
                    'idTipoTelefono'=>2,
                    'idUsuario'=>$usuarioPadre->id,
                ]);
                $telefonoPadre->save();
            }
            if($request['DirecciónMadre']!=NULL){
                $direccioNpadre = new Direccione();
                $direccioNpadre->fill([
                    'detalle'=>$request['DirecciónMadre'],
                    'idMunicipio'=>$request['municipioTrabajoMadre'],
                    'idTipoDireccion'=>3,
                    'idUsuario'=>$usuarioPadre->id
                ]);
                $direccioNpadre->save();
            }

            if(count ($request['sacramentosMadre'])>0){
                $sacramentosPadres = new Sacramentousuario();
                foreach ($request['sacramentosMadre'] as $sacramento){
                    $sacramentosPadres->fill([
                        'idSacramento'=>$sacramento,
                        'idUsuario'=>$usuarioPadre->id,
                    ]);
                    $sacramentosPadres->save();
                }
            }

            $padreEstudiante = new Padreestudiante();
            $padreEstudiante->fill([
                'idEstudiante'=>$estudiante->id,
                'idPadre'=>$padreDeFamilia->id
            ]);
            $padreEstudiante->save();
        }


        //Inscripcion de Encargado
        if($request['nombreResponsable']!=NULL&&$request['apellidoResponsable']!=NULL && $request['DUIResponsable']!=NULL ){
            $emailPadre= $request['correoResponsable'];
            if($emailPadre==NULL){
                $emailEstudiante = $carnetEstudiate.'@encargadocolegiosjb.net';
            }

            $usuarioPadre = new User();
            $usuarioPadre->fill([
                'nombre'=>$request['nombreResponsable'],
                'apellido'=>$request['apellidoResponsable'],
                'genero'=>$request['generoResponsable'],
                'email'=>$emailEstudiante,
                'password'=>bcrypt($request['DUIResponsable']),
                'idTipousuario'=>2,
            ]);
            $usuarioPadre->save();

            $padreDeFamilia = new Padredefamilium();
            $padreDeFamilia->fill([
                'fechaNacimiento'=>$request['fechaNacimientoResponsable'],
                'DUI'=>$request['DUIResponsable'],
                'nombreLugarTrabajo'=>$request['lugarTrabajoResponsable'],
                'idUsuario'=>$usuarioPadre->id,
                'idOficio'=>$request['oficioResponsable'],
                'idTipoPadre'=>1,
                'idEstadoCivil'=>$request['estadoCivilResponsable']
            ]);

            $padreDeFamilia->save();

            if($request['telefonoMadre']!=NULL){
                $telefonoPadre = new Telefono();
                $telefonoPadre->fill([
                    'telefono'=>$request['telefonoTrabajoResponsable'],
                    'idTipoTelefono'=>2,
                    'idUsuario'=>$usuarioPadre->id,
                ]);
                $telefonoPadre->save();
            }
            if($request['DireccionTrabajoResponsable']!=NULL){
                $direccioNpadre = new Direccione();
                $direccioNpadre->fill([
                    'detalle'=>$request['DireccionTrabajoResponsable'],
                    'idMunicipio'=>$request['municipioTrabajoResponsable'],
                    'idTipoDireccion'=>3,
                    'idUsuario'=>$usuarioPadre->id
                ]);
                $direccioNpadre->save();
            }

            if(count ($request['sacramentosMadre'])>0){
                $sacramentosPadres = new Sacramentousuario();
                foreach ($request['sacramentosResponsable'] as $sacramento){
                    $sacramentosPadres->fill([
                        'idSacramento'=>$sacramento,
                        'idUsuario'=>$usuarioPadre->id,
                    ]);
                    $sacramentosPadres->save();
                }
            }

            $padreEstudiante = new Padreestudiante();
            $padreEstudiante->fill([
                'idEstudiante'=>$estudiante->id,
                'idPadre'=>$padreDeFamilia->id
            ]);
            $padreEstudiante->save();
        }



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
        $estudiantes = Estudiante::all();

        return view('matricula.registro_matricula',compact('estudiantes'));
    }

    public function detalleAlumno(){
        return view('matricula.detalle_alumno');
    }

    public function detallePadres(){
        return view('matricula.detalle_padres');
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

        if($request['correoEstudiante']!=$request['correoPadre']
            &&$request['correoEstudiante']!=$request['correoMadre']
            &&$request['correoEstudiante']!=$request['correoResponsable']
            &&$request['correoPadre']!=$request['correoMadre']
            &&$request['correoPadre']!=$request['correoResponsable']
            &&$request['correoMadre']!=$request['correoResponsable']){
            $correcto = false;
        }

        return $correcto;
    }


}
