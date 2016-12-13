@extends('layouts.app4')
@section('content')
    <div class="container">
        <div class="panel panel-body">
            <h2>Detalle del Padre De Familia</h2>
            <h4></h4>

            <table class="table table-hover" id="matriculados">
                <thead><h3>Datos:</h3></thead>
                <tbody>
                <tr>
                    <td>Nombres</td>
                    <td>{{$padre->user->nombre}}</td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td>{{$padre->user->apellido}}</td>
                </tr>
                <tr>
                    <td>Numero de DUI</td>
                    <td>{{$padre->DUI}}</td>
                </tr>
                <tr>
                    <td>Fecha de Nacimiento</td>
                    <td>{{$padre->fechaNacimiento}}</td>
                </tr>
                <tr>
                    <td>Profesión</td>
                    <td>{{$padre->oficio->nombre}}</td>
                </tr>
                <tr>
                    <td>Lugar de Trabajo</td>
                    <td>
                        {{$padre->nombreLugarTrabajo}}
                    </td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>@foreach($padre->user->telefonos as $telegono)
                    {{$telegono->telefono}}
                    @endforeach</td>
                </tr>
                <tr>
                    <td>Dirección del Trabajo</td>
                    <td>@foreach($padre->user->direcciones as $direccion)
                            @if($direccion->idTipoDireccion==3)
                                {{$direccion->detalle}} {{$direccion->municipio->nombre}}
                            @endif

                        @endforeach</td>
                </tr>
                <tr>
                    <td>Sacramentos</td>
                    <td>@foreach($padre->user->sacramentos as $sacramento)
                    {{$sacramento->nombre}}
                    @endforeach</td>
                </tr>
                <tr>
                    <td>Estado Civil</td>
                    <td>{{$padre->estadocivil->nombre}}</td>
                </tr>
                </tbody>
            </table>

            <a href="{{url('/listado_padres')}}"><button class="btn btn-warning btn-align">Regresar a Tabla de Alumnos</button></a>
        </div>
        <script>
            $(document).ready(function () {
                $('#matriculados').DataTable();
            })
        </script>
    </div>
    @stop