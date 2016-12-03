@extends('layouts.app')
@section('content')
{!!Form::open(['class'=>'panel panel-body container'])!!}
<div class="form-group">
    <h3>Ingresar Grado</h3>
    <input type="text" class="form-control">
</div>
{!!Form::submit('Ingresar', ['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
    @stop