<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Direccione;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Gradoseccion;
use App\Models\Historicoestudiante;
use App\Models\Materiagrado;
use App\Models\Matricula;
use App\Models\Matriculadocumento;
use App\Models\Municipio;
use App\Models\Oficio;
use App\Models\Padredefamilium;
use App\Models\Padreestudiante;
use App\Models\Sacramentousuario;
use App\Models\Seccion;
use App\Models\Telefono;
use App\Models\User;
use App\Utilities\Action;
use Auth;
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
            ->whereNull('gradoseccion.deleted_at')->lists('nombre', 'id');
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

            foreach ($request['sacramentosEstudiante'] as $sacramento){
                $sacramentosEstudiante = new Sacramentousuario();
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
                $emailPadre = $carnetEstudiate.'@padrescolegiosjb.net';
            }

            $usuarioPadre = new User();
            $usuarioPadre->fill([
                'nombre'=>$request['nombrePadre'],
                'apellido'=>$request['apellidosPadre'],
                'genero'=>1,
                'email'=>$emailPadre,
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

            if(count ($request['sacramentoPadre'])>0){

                foreach ($request['sacramentoPadre'] as $sacramento){
                    $sacramentosPadres = new Sacramentousuario();
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
                $emailPadre = $carnetEstudiate.'@madrescolegiosjb.net';
            }

            $usuarioPadre = new User();
            $usuarioPadre->fill([
                'nombre'=>$request['nombreMadre'],
                'apellido'=>$request['apellidoMadre'],
                'genero'=>2,
                'email'=>$emailPadre,
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

            if($request['telefonoTrabajoMadre']!=NULL){
                $telefonoPadre = new Telefono();
                $telefonoPadre->fill([
                    'telefono'=>$request['telefonoTrabajoMadre'],
                    'idTipoTelefono'=>2,
                    'idUsuario'=>$usuarioPadre->id,
                ]);
                $telefonoPadre->save();
            }
            if($request['direccionTrabajoMadre']!=NULL){
                $direccioNpadre = new Direccione();
                $direccioNpadre->fill([
                    'detalle'=>$request['direccionTrabajoMadre'],
                    'idMunicipio'=>$request['municipioTrabajoMadre'],
                    'idTipoDireccion'=>3,
                    'idUsuario'=>$usuarioPadre->id
                ]);
                $direccioNpadre->save();
            }

            if(count ($request['sacramentoMadre'])>0){

                foreach ($request['sacramentoMadre'] as $sacramento){
                    $sacramentosPadres = new Sacramentousuario();
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
                $emailPadre = $carnetEstudiate.'@encargadocolegiosjb.net';
            }

            $usuarioPadre = new User();
            $usuarioPadre->fill([
                'nombre'=>$request['nombreResponsable'],
                'apellido'=>$request['apellidoResponsable'],
                'genero'=>$request['generoResponsable'],
                'email'=>$emailPadre,
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

            if($request['telefonoTrabajoResponsable']!=NULL){
                $telefonoPadre = new Telefono();
                $telefonoPadre->fill([
                    'telefono'=>$request['telefonoTrabajoResponsable'],
                    'idTipoTelefono'=>2,
                    'idUsuario'=>$usuarioPadre->id,
                ]);
                $telefonoPadre->save();
            }
            if($request['direccionTrabajoResponsable']!=NULL){
                $direccioNpadre = new Direccione();
                $direccioNpadre->fill([
                    'detalle'=>$request['direccionTrabajoResponsable'],
                    'idMunicipio'=>$request['municipioTrabajoResponsable'],
                    'idTipoDireccion'=>3,
                    'idUsuario'=>$usuarioPadre->id
                ]);
                $direccioNpadre->save();
            }

            if(count ($request['sacramentoResponsable'])>0){

                foreach ($request['sacramentoResponsable'] as $sacramento){
                    $sacramentosPadres = new Sacramentousuario();
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

    public function detalleAlumno($id){
        $estudiante = Estudiante::find($id);
        return view('matricula.detalle_alumno',compact('estudiante'));
    }

    public function detallePadres($id){

        $padre = Padredefamilium::find($id);
        return view('matricula.detalle_padres',compact('padre'));
    }

    public function listadoPadres(){

        $padresDeFamilia = Padredefamilium::all();
        return view('matricula.listado_padres',compact('padresDeFamilia'));
    }

    public function noticias(){
        $maestro = Auth::user()->maestros[0]->id;

        $grados = DB::table('gradoseccion')
            ->join('grados','grados.id','=','gradoseccion.idGrado')
            ->join('seccion','seccion.id','=','gradoseccion.idSeccion')
            ->join('materiagrado','materiagrado.idGradoseccion','=','gradoseccion.id')
            ->where('materiagrado.idMaestroResponsable','=',$maestro)
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->whereNull('gradoseccion.deleted_at')
            ->whereNull('materiagrado.deleted_at')
            ->lists('nombre', 'id');


        return view('matricula.noticias', compact('grados'));
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
        $grados = Grado::orderBy('id', 'ASC')->lists('nombre', 'id');;
        $secciones = Seccion::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        return view('matricula.formularios.alumno_grado',compact('grados','secciones'));
    }

    public function NuevoGrado(Requests\GradoSeccionRequest $request){

        $gradosSeccionExistente = Gradoseccion::where('idGrado',$request['Grado'])->where('idSeccion',$request['Seccion'])->count();
        if($gradosSeccionExistente>0){
            flash('Grado ya existente','danger');
        }else{
            $nuevoGradoSeccion = new Gradoseccion();
            $nuevoGradoSeccion->fill([
                'idGrado'=>$request['Grado'],
                'idSeccion'=>$request['Seccion']
            ]);
            $nuevoGradoSeccion->save();

            flash('Grado Creado exitosamente','success');
        }

        return redirect('/GradosActivos');
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

    public function NuevoHijo($id){
        $departamentos = Departamento::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $municipios = Municipio::where('id_departamento','=',9)->orderBy('nombre', 'ASC')->lists('nombre', 'id');


        $grados = DB::table('gradoseccion')
            ->join('grados', 'grados.id', '=', 'gradoseccion.idGrado')
            ->join('seccion', 'seccion.id', '=', 'gradoseccion.idSeccion')
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->lists('nombre', 'id');
        $gradosAntiguos = Grado::all()->lists('nombre','id');

        $oficios = Oficio::orderBy('nombre', 'ASC')->lists('nombre', 'id');

        return view('matricula.AgregarHijo', compact('departamentos','grados','oficios','municipios','gradosAntiguos','id'));


    }

    public function registrarHijo(Requests\NuevoHijoRequest $request, $id){
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

        $padreEstudiante = new Padreestudiante();
        $padreEstudiante->fill([
            'idEstudiante'=>$estudiante->id,
            'idPadre'=>$id
        ]);
        $padreEstudiante->save();

        flash('Registro Exitoso', 'success');
        return redirect('listado_padres');

    }

    public function registroGrado($id){
        $grado = Gradoseccion::find($id);

        $estudiantes = Estudiante::whereHas('matriculas',function ($query) use ($id){
            $query->where('idGradoSeccion',$id);
        })->get();

        return view('matricula.registro_matricula',compact('estudiantes','grado'));



    }

    public function CambiarPassowrd(){
        return view('Maestros.ResetearPassword');
    }

    public function PasswordNuevo(Request $request){
        if($request['password']==null || $request['password_confirmation']==null){
            flash('Contraseña no puede ser un campo vacio','danger');
            return redirect()->back();
        }
        if($request['password']!=$request['password_confirmation']){
            flash('Contraseñas No coiciden','danger');
            return redirect()->back();
        }

        $usuario = User::find(\Auth::user()->id);

        $usuario->fill([
            'password'=>bcrypt($request['password']),
            'resetPassword'=>'0'
        ]);

        $usuario->save();

        if($usuario->idTipousuario==5){

            return redirect()->route('registro.index');
        }else if($usuario->idTipousuario==3) {

            return redirect()->route('MisMaterias.Maestro');
        }else if($usuario->idTipousuario==1) {

            return redirect()->route('Alumno.MisClases');
        }else{
            return redirect('/logout');
        }
    }

    public function cambiarEmail(){
        return view('auth.emails.CambiarEmail');
    }

    public function updateEmail(Requests\UpdateEmail $request){
        if($request['email']!=null && $request['emailConfirmacion']!=null &&$request['email']==$request['emailConfirmacion'] ){
            $usuario = User::find(\Auth::user()->id);
            if($usuario!=null){
                $usuario->fill([
                    'email'=>$request['email']
                ]);
                $usuario->save();
                flash('Email Actualizado Exitosamente','info');
                return redirect()->back();
            }
        }else{
            flash('Error datos inconsitentes','danger');
            return redirect()->back()->withErrors();
        }
    }

}
