@extends('layouts.app4')
@section('content')


    @include('includes.tab_formulario')
    @include('includes.add_formulario')
    <div class="panel panel-heading mdl-color--pink-900 container">

        <img class="img-thumbnail center-block" src="{{asset('img/indexes/logo.jpg')}}"
             alt="Generic placeholder image" width="240" height="240">
    </div>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="estudiante">


            {!!Form::open(['route'=>['Maestros.MateriasInsert'], 'method'=>'PUT', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}

            <div class="container panel panel-body">
               <h2>Materias para el grado {{$gradoSeccion->grado->nombre}} {{$gradoSeccion->seccion->nombre}}</h2>
                @include('alertas.errores')
                @include('alertas.flash')
                @include('Maestros.formulario.AsignarMateriaMaestroFormulario')




            </div>
        </div>
        <!--<button role="button" data-toggle="button" id="btn_add" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored floating">
            <i class="material-icons">add</i>
        </button>-->

    </div>
@stop