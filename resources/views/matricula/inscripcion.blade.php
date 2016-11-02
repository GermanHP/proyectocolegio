@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading mdl-color--pink-900">
                <h2 class="text-center">Instrucciones para Matrícula.</h2>
            </div>

            <hr class="divider">
            <div class="panel-body">
                <p><h6>A continuación se detallan los pasos para efectuar la matrícula en línea. El proceso de
                    inscripción está disponible para todo público, sin embargo, la institución se reserva el derecho de
                    admisión del estudiante aspirante.</h6></p>

                <!-- List group -->
                <ul class="list-group container">
                    <li class="list-group-item">1- Adquirir la carpeta de información de matrícula para el año escolar 2017
                        en la oficina del colegio. Costo $15.00</li>
                    <li class="list-group-item">2- Cancelar la matrícula con talonario de pagos 2017 en la Caja de Crédito de
                        Olocuilta. Costo de matrícula $35.00</li>
                    <li class="list-group-item">3- Completar el proceso de matrícula en secretaría del colegio, presentando la
                        documentación pertinente y recibo de pago de matrícula.</li>

                    <li class="list-group-item"> <h4>Próximamente</h4> </li>
                </ul>

            <!--<a class="btn btn-primary btn-align" href="{{ url('/formulario') }}">Comenzar</a> -->
            </div>
        </div>
    </div>
@endsection