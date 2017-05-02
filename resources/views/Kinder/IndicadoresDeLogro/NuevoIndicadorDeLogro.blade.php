@extends('layouts.app4')
@section('content')



    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="estudiante">
            {!!Form::open(['route'=>['Notas.GuardarNuevoIndicador'], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
            <div class="container panel panel-body">
                @include('alertas.errores')
                @include('alertas.flash')

                <div class="container panel panel-body">
                    <h3>Area de desarrollo</h3>
                    <div class="input-group form-group">
                        {{Form::label('Titulo ',null,['class'=>'input-group-addon'])}}
                        {{Form::text('nombre',null, ['class'=>'form-control', 'placeholder'=>'Nombres', 'required'=>'true'])}}
                    </div>
                    <div class="input-group form-group">
                        {{Form::label('Grados',null,['class'=>'input-group-addon'])}}
                        {!! Form::select('grados',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
                    </div>
                    <div class="input-group form-group">
                        {{Form::label('Area  ',null,['class'=>'input-group-addon'])}}
                        {!! Form::select('areas',$areas,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipio',  'style'=>'width: 100%']) !!}
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