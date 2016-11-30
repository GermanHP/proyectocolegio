@extends('layouts.app')
@section('content')
    @include('includes.tab_formulario')
    <div class="panel panel-heading mdl-color--pink-900 container">

        <img class="img-thumbnail center-block" src="img/indexes/logo.jpg"
             alt="Generic placeholder image" width="240" height="240">
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="estudiante">
            {!!Form::open(['route'=>'Registrar.Estudiante', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}



            <div class="container panel panel-body">
            @include('matricula.formularios.RegistrarEstudiante')
        <div role="tabpanel" class="tab-pane fade" id="padre">
            @include('matricula.formularios.RegistrarPadres')
            </div>
        <div role="tabpanel" class="tab-pane fade" id="otros">
            @include('matricula.formularios.DatosGenerales')
                {!!Form::submit('Registrar Estudiante', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
                {!!Form::close()!!}
        </div>
            </div>
    </div>
@stop

