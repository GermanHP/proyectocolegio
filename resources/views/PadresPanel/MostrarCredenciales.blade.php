@extends('layouts.app')
@section('content')

    <div class="panel panel-primary container">
        <div class="panel-heading">
            <img class="img-thumbnail center-block" src="img/indexes/logo.jpg"
                 alt="Generic placeholder image" width="240" height="240">
            <h2 class="text-center">Colegio San Juan Bautista</h2>
        </div>
        <div class="panel-body">


        </div>
        <div class="container">
            <h3>Credenciales de Acceso</h3>
            @include('alertas.flash')
            @include('alertas.errores')
            <h5>Para obtener las credenciales de acceso al sistema por favor ingrese su número de DUI sin guiones ni espacios</h5>
            {!!Form::open(['route'=>'Credenciales.Acceso', 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Guardando Espere... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
            <div class="input-group form-group">
                {{Form::label('DUI',null,['class'=>'input-group-addon'])}}
                {{Form::text('DUI',null,['class'=>'form-control','pattern'=>'[0-9]{9}','placeholder'=>'Ingrese el número de DUI','required', 'maxlength'=>'9'])}}
            </div>


            {!!Form::submit('Obtener Credenciales', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
            {!!Form::close()!!}

        </div>
    </div>

@endsection