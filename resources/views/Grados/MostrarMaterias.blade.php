@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Registro de Materias por Grado</h3>
        <h2>{{$grado->grado->nombre}} {{$grado->seccion->nombre}}</h2>

        @include('alertas.flash')
        @include('alertas.errores')


        {!!link_to_route('Materias.NuevoHorario', $title = 'Asignar Horarios', $parameters = $grado->id, $attributes = ['class'=>'btn btn-info','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        {!!link_to_route('ImpartirMateria.View', $title = 'Impartir Materia', $parameters = $grado->id, $attributes = ['class'=>'btn btn-warning','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}

        <table class="table table-striped" id="matriculados">
            <thead>
            <tr>
                <th>Materia</th>
                <th>Horarios</th>
                <th>Encargado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($materias as $materia)
                <tr>
                    <td>{{$materia->materium->nombre}}</td>
                    <td>
                        @if($materia->materiagradohorarios->count()>0)
                            @foreach($materia->materiagradohorarios as $horarios)
                                {{$horarios->horasdisponible->horaInicio}} - {{$horarios->horasdisponible->horaFin}} {{$horarios->diasdisponible->nombre}}<br>
                            @endforeach
                            @else
                            Por Asignar
                            @endif

                    </td>
                    <td>@if(isset($materia->maestro->user))
                            {{$materia->maestro->user->nombre}} {{$materia->maestro->user->apellido}}
                            @else
                            Por Asignar
                       @endif
                    </td>
                    <td>
                        @if(isset($materia->maestro->user))
                            {!!link_to_route('Desactivar.MaestroResponsable', $title = 'Desactivar Maestro Responsable', $parameters = $materia->id, $attributes = ['class'=>'btn btn-warning','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
                        @else
                            {!!link_to_route('Maestros.MateriasAsignar', $title = 'Asignar Resposable', $parameters = $grado->id, $attributes = ['class'=>'btn btn-success','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
                        @endif
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