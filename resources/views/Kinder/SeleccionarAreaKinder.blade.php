@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">

        <h2>Area de Desarrollo</h2>

        @include('alertas.flash')
        @include('alertas.errores')

        <table class="table table-striped" id="mestros">
            <thead>
            <tr>
                <th>id</th>
                <th>Grado</th>
                @foreach($indicadores as $indicadore)
                    <th>{{$indicadore->nombre}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($gradoseccion as $grado)
                <tr>
                    <td>{{$grado->id}}</td>
                    <td>{{$grado->grado->nombre}} {{$grado->seccion->nombre}}</td>
                   @foreach($indicadores as $indicadore)
                       <td>{!!link_to_route('Notas.Prepa.Nuevas', $title = 'Agregar Notas ', $parameters =[$grado->id,$indicadore->id], $attributes = ['class'=>'btn btn-warning','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}</td>
                   @endforeach
                </tr>
            @endforeach
            </tbody>

            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#mestros').DataTable({
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