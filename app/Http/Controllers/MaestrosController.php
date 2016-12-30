<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestInsertarMaestro;
use App\Models\Maestro;
use App\Models\User;
use App\Utilities\Action;
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
            'password'=>'colegio2017',
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

    }
    public function InsertMaestroGrado(Request $request){

    }
    public function MaestroMateria(){

    }
    public function InsertMaestroMateria(Request $request){

    }
}
