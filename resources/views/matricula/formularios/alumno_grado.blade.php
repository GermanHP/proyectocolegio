@extends('layouts.app')
@section('content')

    {!!Form::open(['route'=>'Nuevo.Grado', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);",'class'=>'panel panel-body container'])!!}
    @include('alertas.flash')
    @include('alertas.errores')

    <div class="form-group">
    <h3>Ingresar Grado</h3>
    <div class="input-group form-group">
        {{ Form::label('Grado',null,['class'=>'input-group-addon']) }}
        {!! Form::select('Grado',$grados,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'departmentVivienda', 'onchange'=>'GetMunicipiosVivienda(this)', 'style'=>'width: 100%']) !!}
    </div>
    <div id="divmun" class="input-group form-group" >
        {{ Form::label('Seccion',null,['class'=>'input-group-addon']) }}
        {!! Form::select('Seccion',$secciones,null,['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'municipioVivienda',  'style'=>'width: 100%']) !!}
    </div>
</div>
{!!Form::submit('Ingresar', ['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
    @stop