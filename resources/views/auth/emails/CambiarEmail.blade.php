@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cambiar  Email</div>

                    @include('alertas.flash')
                    @include('alertas.errores')
                    <br>
                    Puede cambiar su email lo que cambiará el usuario de acceso a la plataforma virtual
                    {!!Form::open(['route'=>['cambiar.updateEmail'], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
                     <div class="input-group form-group">
                        {{ Form::label('Ingrese su Email Valido',null,['class'=>'input-group-addon']) }}<br>
                         {{Form::email('email',null, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}<br>
                    </div>

                    <div class="input-group form-group">
                        {{ Form::label('Ingrese nuevamente su Email Valido',null,['class'=>'input-group-addon']) }}<br>
                         {{Form::email('emailConfirmacion',null, ['class'=>'form-control', 'placeholder'=>'e-mail', 'id'=>'correoPadre', 'aria-describedby'=>'basic-addon1'])}}<br>
                    </div>
                    {!!Form::submit('Actualizar Email', ['class'=>'btn btn-danger','name'=>'btnCrearUsuario'])!!}<br>
                    {!! Form::close() !!}
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
