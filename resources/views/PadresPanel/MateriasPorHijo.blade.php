@extends('layouts.app6')
@section('content')
    <div class="container panel panel-body">
        <h3>Materias de {{$estudiante->user->nombre}} {{$estudiante->user->apellido}}</h3>
        <h2>Bienvenido {{Auth::user()->nombre}} {{Auth::user()->apellido}}</h2>

        @include('alertas.flash')
        @include('alertas.errores')
        <form action="http://moodle.colegiosjb.net/login/index.php" id="login" method="post">
            <input class="input"  style="display:none" id="username" name="username" type="text" value="{{Auth::user()->usuarioMoodle}}" />
            <input class="input"  style="display:none" id="password" name="password" type="password" value="{{Auth::user()->passwordMoodle}}" />
            {!!Form::submit('Aula Virtual', ['class'=>'btn btn-info','name'=>'btnMoodle'])!!}
        </form>
        <table class="table table-striped" id="matriculados">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Horarios</th>
                <th>Maestro Encargado</th>

                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($materias as $materia)
                <tr>
                    <td>{{$materia->materium->nombre}}</td>
                    <td>@foreach($materia->materiagradohorarios as $horario)
                            {{$horario->diasdisponible->nombre}} {{$horario->horasdisponible->horaInicio}} - {{$horario->horasdisponible->horaFin}}
                        @endforeach</td>
                    <td>{{$materia->maestro->user->nombre}} {{$materia->maestro->user->apellido}}</td>

                    <td>

                        Notas... Proximamente

                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#matriculados').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                responsive: true,
                "autoWidth": true,

                "order": [[3, 'asc'], [2, 'desc']],
                "language": {


                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Mostrar _MENU_ registros",
                    "sZeroRecords": "No se encontraron resultados",
                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Ãšltimo",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }

                }

            });
        })
    </script>
@stop