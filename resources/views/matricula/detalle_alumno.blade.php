@extends('layouts.app4')
@section('content')
    <div class="container">
        <div class="panel panel-body">
        <h2>Detalle del Alumno</h2>
        <h4>{{$estudiante->user->nombre}}</h4>

        <table class="table table-hover" id="matriculados">

            <tbody>
            <tr>
                <td>Lugar de Nacimiento</td>
                <td>
                    @foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==1)
                            {{$direccion->detalle}},
                            @endif
                    @endforeach
                </td>
            </tr>
            <tr>
                <td>Departamento</td>
                <td>
                    @foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==1)
                            {{$direccion->municipio->departamento->nombre}}
                        @endif
                    @endforeach
                    </td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>
                    @foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==1)
                            {{$direccion->municipio->nombre}}
                        @endif
                    @endforeach
                    </td>
            </tr>
            <tr>
                <td>Grado que cursa</td>
                <td> @foreach($estudiante->matriculas as $matriculas)

                        {{$matriculas->gradoseccion->grado->nombre}} {{$matriculas->gradoseccion->seccion->nombre}}
                    @endforeach</td>
            </tr>
            <tr>
                <td>Sacramentos</td>
                <td>@foreach($estudiante->user->sacramentos as $sacramentos)
                    {{$sacramentos->nombre}}
                @endforeach</td>
            </tr>
            <tr>
                <td>Estudió Parvularia</td>
                <td>@if($estudiante->parvularia==1)
                    SI
                    @else
                        NO
                    @endif
                </td>
            </tr>
            <tr>
                <td>Dirección de residencia</td>
                <td>@foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==2)
                            {{$direccion->detalle}},
                        @endif
                    @endforeach</td>
            </tr>
            <tr>
                <td>Departamento</td>
                <td>@foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==2)
                            {{$direccion->municipio->departamento->nombre}}
                        @endif
                    @endforeach</td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>                    @foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==2)
                            {{$direccion->municipio->nombre}}
                        @endif
                    @endforeach
                </td>
            </tr>

            <tr>
                <td>El/La Estudiante se Retira a la Hora de Salida:</td>
                <td>@if($estudiante->retirada==1)
                        Solo
                @else
                    Acompañado
                    @endif
                </td>
            </tr>
            <tr>
                <td>Nombre de la Persona Autorizada</td>
                <td>{{$estudiante->PersonaAutorizada}}</td>
            </tr>
            <tr>
                <td>En Caso de Emergencia comunicarse con:</td>
                <td>{{$estudiante->PersonaEmergencia}}</td>
            </tr>
            <tr>
                <td>Dirección</td>
                <td>@foreach($estudiante->user->direcciones as $direccion)
                        @if($direccion->idTipoDireccion==4)
                            {{$direccion->detalle}},
                        @endif
                    @endforeach</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>@foreach($estudiante->user->telefonos as $telefonos)
                        @if($telefonos->idTipoTelefono==4)
                            {{$telefonos->telefono}}
                        @endif
                    @endforeach</td>
            </tr>
            <tr>
                <td>Documentos Entregados</td>
                <td>Documentos</td>
            </tr>
            </tbody>
        </table>

            <a href="{{url('/registro')}}"><button class="btn btn-danger btn-align">Regresar</button></a>
        </div>
        <script>
            $(document).ready(function () {
                $('#matriculados').DataTable();
            })
        </script>
    </div>
    @stop