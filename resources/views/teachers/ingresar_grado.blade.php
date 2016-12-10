@extends('layouts.app4')
@section('content')
    {!!Form::open(['class'=>'panel panel-body container'])!!}
    <h3>Ingresar Grado</h3>
    <div class="input-group form-group">
        {{ Form::label('Grado',null,['class'=>'input-group-addon']) }}
        {!! Form::select('nombreGrado',['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'nombreGrado',  'style'=>'width: 100%']) !!}
        {{ Form::label('Sección',null,['class'=>'input-group-addon']) }}
        {!! Form::select('nombreSeccion',['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",'required', 'id'=>'nombreSeccion',  'style'=>'width: 100%']) !!}
    </div>
    {!!Form::submit('Ingresar', ['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop