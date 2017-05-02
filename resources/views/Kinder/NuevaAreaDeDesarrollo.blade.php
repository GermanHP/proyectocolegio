@extends('layouts.app4')
@section('content')



    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="estudiante">
            {!!Form::open(['route'=>['Notas.Prepa.GuardarArea'], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
            <div class="container panel panel-body">
                @include('alertas.errores')
                @include('alertas.flash')

                <div class="container panel panel-body">
                    <h3>Area de desarrollo</h3>
                    <div class="input-group form-group">
                        {{Form::label('Titulo ',null,['class'=>'input-group-addon'])}}
                        {{Form::text('nombre',null, ['class'=>'form-control', 'placeholder'=>'Nombres', 'required'=>'true'])}}
                    </div>
                    {!!Form::submit('Guardar', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
                    {!!Form::close()!!}
                </div>




            </div>
        </div>
        <!--<button role="button" data-toggle="button" id="btn_add" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored floating">
            <i class="material-icons">add</i>
        </button>-->

    </div>
@stop