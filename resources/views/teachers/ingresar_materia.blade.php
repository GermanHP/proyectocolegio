@extends('layouts.app4')
@section('content')
    {!!Form::open(['class'=>'panel panel-body container'])!!}
    <div class="form-group">
        <h3>Ingresar Materia</h3>
        {{Form::text('ingresarMateria',null,['class'=>'form-control', 'placeholder'=>'Nombre de la Materia'])}}
    </div>
    {!!Form::submit('Ingresar', ['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop