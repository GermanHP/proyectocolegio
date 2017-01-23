@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Registro de Materias</h3>
        <h2>Nueva Materia</h2>

        @include('alertas.flash')
        @include('alertas.errores')
        {!!Form::open(['route'=>'Materia.Insertar', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        <div class="input-group form-group">
            {{Form::label('Materia',null,['class'=>'input-group-addon'])}}
            {{Form::text('nombreMateria',null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la materia'])}}
        </div>
        {!!Form::submit('Guardar Materia', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
        {!!Form::close()!!}
    </div>

@stop