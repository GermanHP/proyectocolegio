@extends('layouts.app4')
@section('content')
    <div class="container panel panel-body">
        <h3>Boletas del grado </h3>

        @include('alertas.flash')
        @include('alertas.errores')

        <table class="table table-striped" id="mestrddos">
            <thead>
            <tr>
                <th>N°</th>
                <th>Alumnos</th>
                <th>Conducta</th>
                <th>Asistencia</th>
                <th>Observaciones</th>
            </tr>
            </thead>
            <tbody>
            {!!Form::open(['route'=>['Boletas.GuardarInformacion',$id], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Cargando... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
            <?php $contador =0;?>
            @foreach($alumnosDisponibles as $alumnosDisponible)
                <?php $existente  = 0;?>
                @foreach($alumnos as $alumno)
                    @if($alumnosDisponible->id == $alumno->id)
                        <?php $existente=1;?>
                        <?php $contador++?>
                        <tr>
                            <td>{{$contador}}</td>
                            <td>{{$alumno->apellido}} {{$alumno->nombre}}</td>
                            @if(isset($alumno->notaConducta) && $alumno->idPeriodo == env('PERIODO_ID'))
                                <td> {{Form::number('Conducta[]',$alumno->notaConducta, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                                <td>  {{Form::number('Asistencia[]',$alumno->porcentajeAsistencia, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                                <td>  {{Form::text('Observaciones[]',$alumno->Observaciones, ['class'=>'form-control','tabindex'=>'2', 'placeholder'=>'Observaciones','aria-describedby'=>'basic-addon1'])}}</td>
                            @else
                                <td> {{Form::number('Conducta[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                                <td>  {{Form::number('Asistencia[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                                <td>  {{Form::text('Observaciones[]',null, ['class'=>'form-control','tabindex'=>'2', 'placeholder'=>'Observaciones','aria-describedby'=>'basic-addon1'])}}</td>

                            @endif

                        </tr>
                    @endif

            @endforeach

                @if($existente==0)
                    <?php $contador++?>
                    <tr>
                        <td>{{$contador}}</td>
                        <td>{{$alumnosDisponible->apellido}} {{$alumnosDisponible->nombre}}</td>

                            <td> {{Form::number('Conducta[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                            <td>  {{Form::number('Asistencia[]',0, ['class'=>'form-control','tabindex'=>'2','onclick'=>'if(this.value==0) this.value=""','onblur'=>'if(this.value=="")this.value=0', 'placeholder'=>'0','step'=>'0.01', 'required','min'=>'0','id'=>'correoPadre','max'=>'10', 'aria-describedby'=>'basic-addon1'])}}</td>
                            <td>  {{Form::text('Observaciones[]',null, ['class'=>'form-control','tabindex'=>'2', 'placeholder'=>'Observaciones','aria-describedby'=>'basic-addon1'])}}</td>



                    </tr>
                 @endif
             @endforeach

            {!!Form::submit('Guardar Informacion', ['class'=>'btn btn-primary','name'=>'btnCrearUsuario'])!!}
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