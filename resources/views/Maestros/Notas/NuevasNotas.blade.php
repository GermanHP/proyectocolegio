@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Notas para la materia de {{$materia->materium->nombre}}</h3>
        <h3>Grado:  {{$materia->gradoseccion->grado->nombre}} {{$materia->gradoseccion->seccion->nombre}}</h3>
        @include('alertas.flash')
        @include('alertas.errores')

        <table class="table table-striped" id="messdsdasdasdasdasdadsstros">
            <thead>
            <tr>

                <th>Alumnos</th>
                <th>Revision de Cuarderno (15%)</th>
                <th>Actividades Complementarias (20%)</th>
                <th>Actividades Integradoras (35%)</th>
                <th>Prueba Objetiva(30%)</th>
                <th>Promedio</th>
            </tr>
            </thead>
            <tbody>
            {!!Form::open(['route'=>['Notas.Insertar'], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}

            @foreach($alumnos as $alumno)
                <tr>

                    <td>{{$alumno->apellido}} {{$alumno->nombre}}</td>
                    <td>{{Form::number('Revision[]',0, ['class'=>'form-control','tabindex'=>'1','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'any', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                    <td>{{Form::number('ActividadesComplementarias[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'any', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                    <td>{{Form::number('ActividadesIntegradoras[]',0, ['class'=>'form-control','tabindex'=>'3','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'any', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                    <td>{{Form::number('PruebaObjetiva[]',0, ['class'=>'form-control','tabindex'=>'4','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'any', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                    <td>0</td>
                </tr>
                @endforeach




            </tbody>
            {!!Form::submit('Guardar Notas', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
            {!! Form::close() !!}
        </table>

    </div>

    <script>
        $(document).ready(function () {
            $('#mestros').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                responsive: true,
                "autoWidth": true,

                "order": [[0, 'asc']],
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