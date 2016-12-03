@extends('layouts.app')
@section('content')
{!!Form::open(['class'=>'panel panel-body container'])!!}
<div class="form-group">
    <h4>Asignar Alumno a su Grado</h4>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Nombres</span>
        <input type="text" class="form-control" placeholder="Nombres" aria-describedby="basic-addon1">
    </div>
    <div class="input-group form-group">
        <span class="input-group-addon" id="basic-addon1">Apellidos</span>
        <input type="text" class="form-control" placeholder="Apellidos..." aria-describedby="basic-addon1">
    </div>
    <label for="sel1">Seleccionar Grado:</label>
    <select class="form-control" id="sel1">
        <option>Kinder 4</option>
        <option>Kinder 5</option>
        <option>Primer Grado</option>
        <option>Segundo Grado</option>
        <option>Tercer Grado</option>
        <option>Cuarto Grado</option>
        <option>Quinto Grado</option>
        <option>Sexto Grado</option>
        <option>Séptimo Grado</option>
        <option>Octavo Grado</option>
        <option>Noveno Grado</option>
    </select>
</div>
{!!Form::submit('Asignar', ['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
    @stop