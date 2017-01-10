<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInsertarMaestro;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Gradoseccion;
use App\Models\Maestro;
use App\Models\Materia;
use App\Models\Materiagrado;
use App\Models\User;
use App\Utilities\Action;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaestrosController extends Controller
{
    public function NuevoMaestro(){
        return view('Maestros.NuevoMaestro');
    }

    public function InsertarMaestro(RequestInsertarMaestro $request){
        $maestro = new Maestro();
        $usuarioMaestro = new User();
        $usuarioMaestro->fill([
            'nombre' =>$request['nombre'],
            'apellido'=>$request['apellido'],
            'genero'=> $request['genero'],
            'email'=>$request['email'],
            'password'=>bcrypt('colegio2017'),
            'idTipousuario'=>'3'
        ]);
        $usuarioMaestro->save();
        $maestro->fill([
            'titulo'=>$request['titulo'],
            'descripcion'=>$request['descripcion'],
            'idUsuario'=>$usuarioMaestro->id,
        ]);
        $maestro->save();
        flash('Datos Guardados con Exito','success');
        return redirect()->back();
    }
    public function MostrarMaestros(){
        $maestros = Maestro::all();
        return view('Maestros.MostrarMaestros',compact('maestros'));
    }
    public function EliminarMaestro($id){
        $maestro = Maestro::find($id);
        if($maestro->gradoseccions()->count()>0 || $maestro->materiagrados->count()>0){
            flash('El maestro tiene grados o materias asignadas','danger');
            return redirect()->back();
        }else{
            $maestro->delete();

            flash('Maestro desactivado exitosamente','info');
            return redirect()->back();
        }

    }
    public function ActualizarMaestro($id){
        $maestro = Maestro::find($id);
        return view('Maestros.ActualizarMaestro',compact('maestro'));
    }
    public function UpdateMaestro(Request $request,$id){
        $maestro= Maestro::find($id);
        $maestro->user->fill([
            'nombre' =>$request['nombre'],
            'apellido'=>$request['apellido'],
            'genero'=> $request['genero'],
            'email'=>$request['email'],
        ]);
        $maestro->user->save();
        $maestro->fill([
            'titulo'=>$request['titulo'],
            'descripcion'=>$request['descripcion'],
        ]);

        $maestro->save();
        flash('Datos Actualizardos con exito','success');
        return redirect('/MostrarMaestros');
    }
    public  function MaestroGrado(){
        $grados = DB::table('gradoseccion')
            ->join('grados', 'grados.id', '=', 'gradoseccion.idGrado')
            ->join('seccion', 'seccion.id', '=', 'gradoseccion.idSeccion')
            ->select('gradoseccion.id', DB::raw('concat(grados.nombre, " ", seccion.Nombre ) as nombre'))
            ->whereNull('gradoseccion.deleted_at')
            ->whereNUll('idMaestroEncargado')
            ->lists('nombre', 'id');


        $maestros = DB::table('maestros')
            ->join('users','users.id','=','maestros.idUsuario')
            ->whereNull('maestros.deleted_at')
            ->select('maestros.id',DB::raw('concat(users.nombre, " ", users.apellido) as nombre'))
            ->lists('nombre','id');

        if(count($grados)==0){
            flash('Todos los grados ya tienen un responsable','warning');
        }
        return view('Maestros.AsignarResponsable',compact('grados','maestros'));
    }
    public function InsertMaestroGrado(Requests\RequestMaestroGrado $request){
        $gradoSeccion = Gradoseccion::find($request['grado']);
        $gradoSeccion->fill([
            'idMaestroEncargado'=>$request['maestro']
        ]);
        $gradoSeccion->save();
        flash('Datos guardados exitosamente','info');
        return redirect()->back();
    }
    public function MaestroMateria($id){
        $maestros = DB::table('maestros')
            ->join('users','users.id','=','maestros.idUsuario')
            ->whereNull('maestros.deleted_at')
            ->select('maestros.id',DB::raw('concat(users.nombre, " ", users.apellido) as nombre'))
            ->lists('nombre','id');
        $gradoSeccion = Gradoseccion::find($id);
        $materias =DB::table('materiagrado')
                    ->join('materias','materias.id','=','materiagrado.idMateria')
                    ->join('gradoseccion','gradoseccion.id','=','materiagrado.idGradoSeccion')
                    ->whereNull('materiagrado.deleted_at')
                    ->whereNull('materias.deleted_at')
                    ->whereNull('idMaestroResponsable')
                    ->where('materiagrado.idGradoSeccion','=',$id)
                    ->select('materiagrado.id','materias.nombre')
                    ->lists('nombre','id');
        if(count($materias)==0){
            flash('Todas las Materias se encuentran asiganas para este grado','warning');
        }
        return view('Maestros.AsignarMateriasMaestro',compact('maestros','materias','gradoSeccion'));

    }
    public function InsertMaestroMateria(Requests\RequestMaestroMateria $request){
        $materiaGrado = Materiagrado::where('id','=',$request['materias'])->get();
        $materiaGrado = Materiagrado::find($request['materias']);

        $materiaGrado->fill([
            'idMaestroResponsable'=>$request['maestro']
        ]);
        $materiaGrado->save();
        flash('Datos Guardados con exito','success');
        return redirect()->back();

    }

    public function DesactivarMaestroResponsable($id){
        $materiaGrado = Materiagrado::find($id);
        $materiaGrado->fill([
            'idMaestroResponsable'=>NULL
        ]);
        $materiaGrado->save();

        flash('Responsable de la materia eliminado','warning');
        return redirect()->back();
    }

    public function  ResetearContraseñaAlumno($id){
        $estudiante = Estudiante::find($id);
        $estudiante->user->fill([
           'password'=>bcrypt($estudiante->Carnet)
        ]);
        $estudiante->user->save();
        flash('Contraseña Reiniciada exitosamente','info');
        return redirect()->back();
    }

    public function MisMaterias(){

        $usuario = User::find(\Auth::user()->id);
        return view('Maestros.MateriasImpartidas',compact('usuario'));
    }
}
