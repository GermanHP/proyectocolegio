@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Listado de Materias Impartidas</h3>
        <table class="table table-striped" id="matriculados">
            <thead>
            <tr>
                <th>Nombres de la Materia</th>
                <th>Impartida Por</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Nombre materia</td>
                <td>Docente</td>
            </tr>
            <tr>
                <td>Nombre materia</td>
                <td>Docente</td>
            </tr>
            <tr>
                <td>Nombre materia</td>
                <td>Docente</td>
            </tr>

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