@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">

        <h2>Area de Desarrollo</h2>

        @include('alertas.flash')
        @include('alertas.errores')

        {!!link_to_route('Notas.prepa.NuevaArea', $title = 'Nueva Area de desarrollo ', $parameters = [], $attributes = ['class'=>'btn btn-success','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
        <table class="table table-striped" id="mestros">
            <thead>
            <tr>
                <th>id</th>
                <th>Area de Desarrollo </th>

                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($areasDeDesarrollo as $areaDeDesarrollo)
                    <tr>
                        <td>{{$areaDeDesarrollo->id}}</td>
                        <td>{{$areaDeDesarrollo->nombre}}</td>
                        <td>{!!link_to_route('Notas.Prepa.EliminarArea', $title = 'Eliminar ', $parameters = $areaDeDesarrollo->id, $attributes = ['class'=>'btn btn-danger','onclick'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}</td>
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