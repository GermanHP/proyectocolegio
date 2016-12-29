<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MateriasController extends Controller
{
    public function NuevaMateria(){
        return view('Materias.NuevaMateria');
    }
    public function InsertMateria(Requests\RequestNuevaMateria $request){
        $materia = new Materia();
        $materia->fill([
            'nombre'=>$request['nombreMateria'],
        ]);
        $materia->save();
        flash('Materia Guardada con Exito','success');
        return redirect()->back();
    }

    public function MostrarMaterias(){
        $materias = Materia::all();
        return view('Materias.MostrarMaterias',compact('materias'));
    }
    public function EliminarMateria($id){
        $materia = Materia::find($id);
        $materia->delete();

        flash('Materia Eliminada con Exito','success');
        return redirect()->back();
    }


}
