@extends('layouts.app4')
@section('content')
         <div class="container panel panel-body">
        <h3>Registro de Matrículas</h3>
            <h2># Grado</h2>
            <table class="table table-striped" id="matriculados">
                <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Encargado</th>
                    <th>Grado</th>

                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>

                @foreach($estudiantes as $estudiante)


                <tr>
                    <td>{{$estudiante->user->nombre}}</td>
                    <td>{{$estudiante->user->apellido}}</td>
                    <td>@foreach($estudiante->padredefamilia as $padreDeFamilia)

                    {{$padreDeFamilia->user->nombre}} {{$padreDeFamilia->user->apellido}}

                    @endforeach</td>
                <td>
                    @foreach($estudiante->matriculas as $matriculas)

                    {{$matriculas->gradoseccion->grado->nombre}} {{$matriculas->gradoseccion->seccion->nombre}}
                    @endforeach
                </td>

                    <td>{!!link_to_route('Detalle.Alumno', $title = 'Detalles', $parameters = $estudiante->id, $attributes = ['class'=>'btn btn-success','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}</td>
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