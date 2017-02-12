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
            @foreach($datos as $dato)
                <b>Usuario Encontrado:</b><br>
                {{$dato->user->nombre}} {{$dato->user->apellido}}<br>

                <b>Correo para accesar a la plataforma</b><br>
                {{$dato->user->email}}<br>

                <b>Contraseña: </b><br>
                La contraseña de acceso para ti PADRE DE FAMILIA es el numero de DUI que utilizaste para encontrar estos datos<br>

               <br><br> <b>Listado de Alumnos Inscritos</b><br>
                @foreach($dato->padreestudiantes as $hijos)
                    <b>Nombre del estudiante:</b><br>
                    {{$hijos->estudiante->user->nombre}} {{$hijos->estudiante->user->apellido}}<br>
                    <b>Email del estudiante</b><br>
                    {{$hijos->estudiante->user->email}}<br>
                    <b>Carnet del estudiante:</b><br>
                    {{$hijos->estudiante->Carnet}}<br>
                    El acceso para los estudiantes consiste en el Email antes mencionado y su contraseña es el Carnet tambien proporcionado anteriormente<br><br><br>
                    @endforeach

            @endforeach
            {!!link_to_route('Credenciales.Buscar', $title = 'Regresar',  $parameters =[], $attributes = ['class'=>'btn btn-info','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        </div>
    </div>

@endsection