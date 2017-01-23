@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Registro de Horarios</h3>
        <h2>Materias de {{$grado->grado->nombre}} {{$grado->seccion->nombre}}</h2>

        @include('alertas.flash')
        @include('alertas.errores')
<ol>
        @foreach($horarios as $horario)

            <lo>{{$horario->materiagrado->materium->nombre}} {{$horario->horasdisponible->horaInicio}} - {{$horario->horasdisponible->horaFin}} {{$horario->diasdisponible->nombre}}


            </lo><br>

        {!!link_to_route('Materias.EliminarHorario', $title = 'Eliminar Horario',  $horario->id, $attributes = ['class'=>'btn btn-warning','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}

        <br>

            @endforeach</ol>
        {!!Form::open(['route'=>['Materias.InsertHorario',$grado->id], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}

        <div id="divmunVivienda" class="input-group form-group" >
            {{ Form::label('Materia a impartir',null,['class'=>'input-group-addon']) }}
            {!! Form::select('materia',$materias,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
        </div>

        <div id="divmunVivienda" class="input-group form-group" >
            {{ Form::label('Horario a impartir',null,['class'=>'input-group-addon']) }}
            {!! Form::select('Horarios',$horariosDisponibles,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
        </div>

        <div id="divmunVivienda" class="input-group form-group" >
            {{ Form::label('Dia en que se impartira',null,['class'=>'input-group-addon']) }}
            {!! Form::select('Dia',$diasDisponibles,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
        </div>


        {!!Form::submit('Guardar Horario', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
        {!!Form::close()!!}
    </div>

@stop