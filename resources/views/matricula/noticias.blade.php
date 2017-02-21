@extends('layouts.app4')
@section('content')

        <div class="container panel panel-body">
        <h3>Nombre de la Noticia</h3>
            {!!Form::open(['route'=>'Registrar.Estudiante', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        <div class="input-group form-group">
            <span class="input-group-addon" id="basic-addon1">Noticia</span>
            <input type="text" class="form-control" placeholder="Nombre de noticia" aria-describedby="basic-addon1">
        </div>
            <h3>Contenido de la noticia</h3>
            <div class="input-group form-group">
                <span class="input-group-addon" id="basic-addon1">Contenido</span>
                <textarea class="form-control" rows="5" id="comment"></textarea><br><br>
                  <span class="input-group-addon" id="basic-addon1">Grado al que desea notificar</span>
                    {!! Form::select('gradoNuevo',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'gradoCombo',  'style'=>'width: 100%']) !!}

                {!!Form::submit('Guardar Noticia', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
                {!! Form::close() !!}
            </div>

        </div>



@stop