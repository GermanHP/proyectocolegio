@extends('layouts.app')
@section('content')
    <div class="panel panel-default panel-align">
        <!-- Default panel contents -->
        <div class="panel-heading"><h4>Instrucciones para matrícula en línea.</h4>
        </div>
        <div class="panel-body">
            <p><h6>A continuación se detallan los pasos para efectuar la matrícula en línea. El proceso de
            inscripción está disponible para todo público, sin embargo, la institución se reserva el derecho de
            admisión del estudiante aspirante.</h6></p>
        </div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">1- Llenar el formulario en línea que se encuentra en el link de abajo.</li>
            <li class="list-group-item">2- Luego de enviar la información del formulario cuenta con 24 horas para
                                        efectuar el pago en el lugar establecido.</li>
            <li class="list-group-item">3- Retirar su talonario físico en las oficinas de la institución</li>
            <li class="list-group-item">4- Efectuar el tramite para el transporte escolar (Sólo si estima necesario)</li>
            <li class="list-group-item">5- Retirar la lista de útiles escolares.</li>

            <li class="list-group-item"> <h4>Próximamente</h4> </li>
        </ul>

        <!--<a class="btn btn-primary btn-align" href="{{ url('/formulario') }}">Comenzar</a> -->
    </div>
@endsection