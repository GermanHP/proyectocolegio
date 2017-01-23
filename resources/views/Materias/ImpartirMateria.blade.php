@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Registro de Materias</h3>
        <h2>Nueva Materia</h2>

        @include('alertas.flash')
        @include('alertas.errores')
        {!!Form::open(['route'=>'Materia.InsertarImpartir', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        <div id="divmunVivienda" class="input-group form-group" >
            {{ Form::label('Materia a impartir',null,['class'=>'input-group-addon']) }}
            {!! Form::select('materia',$materias,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
        </div>

        <div id="divmunVivienda" class="input-group form-group" >
            {{ Form::label('Grado en que se impartira',null,['class'=>'input-group-addon']) }}
            {!! Form::select('GradoSeccion',$gradoSeccion,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
        </div>


        {!!Form::submit('Impartir Materia', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
        {!!Form::close()!!}
    </div>

@stop