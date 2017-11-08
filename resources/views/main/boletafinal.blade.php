<html>
<head>

</head>
<!-- Tell the browser to be responsive to screen width -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<!-- Bootstrap 3.3.5 -->
<style>

    <?php include(public_path() . '/assets/css/bootstrap.css');?>
    <?php include(public_path() . '/assets/dist/css/AdminLTE.css');?>
    <?php include(public_path() . '/assets/dist/css/skins/_all-skins.css');?>
    <?php include(public_path() . '/assets/css/font-awesome.css');?>

@page teacher {
        size: A4 ;
        margin: 1cm;
    }

    .teacherPage {
        page: teacher;
        page-break-after: always;
    }

    .text-rotation {display: block;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
    }

    .docente{
        margin-left: 4%;
    }

    .director{
        margin-top: -4.5%;
    }

    .director2{
        margin-top: -4%;
        margin-right: 11%;
    }

    .Rotate-90
    {
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);

        position: relative;
        left:75px;


    }

    @table-border-color{
        table-border-color-dark: #000;
    }
    .ajustar{
        height: 200px;
        width: 100px;
        float: left;
        white-space: pre; /* CSS 2.0 */
        white-space: pre-wrap; /* CSS 2.1 */
        white-space: pre-line; /* CSS 3.0 */
        white-space: -pre-wrap; /* Opera 4-6 */
        white-space: -o-pre-wrap; /* Opera 7 */
        white-space: -moz-pre-wrap; /* Mozilla */
        white-space: -hp-pre-wrap; /* HP */
        word-wrap: break-word; /* IE 5+ */
    }

</style>

<body style="height: 300px;!important; background: white;">
<?php $nVueltas = 0; ?>
@foreach($alumnos as $alumno)
    @if($alumno->matriculas[0]->gradoseccion->id==$id)
        @if($nVueltas==0)
			<?php $nVueltas = 1;?>
        @elseif($nVueltas>375)
			<?php break; ?>
        @else
            <hr>
        @endif
    <div class="row teacherPage">
        <div class="col-md-12">

            <h2 class="text-center"><img src="https://colegiosjb.net/img/indexes/logo.jpg" alt="" height="100" width="100"><br></h2>
            <h2 class="page-header text-center" id="titulo">Colegio San Juan Bautista<br><br></h2>

            <h3 class="text-center" id="titulo">COLEGIO "SAN JUAN BAUTISTA"<br></h3>
            <h3 class="text-center" id="titulo">INFORME FINAL DE RENDIMIENTO ACADÉMICO 2017<br></h3>
            <h3 class="text-center" id="titulo">GRADO {{$alumno->matriculas[0]->gradoseccion->grado->nombre}} {{$alumno->matriculas[0]->gradoseccion->seccion->nombre}}<br><br></h3>


            <div class="container">
                <table class="table" border="1" bordercolor="#0000">
                    <thead>
                    <tr>
                        <td colspan="10"><h2 class="text-center">ALUMNO/A: {{$alumno->user->nombre}} {{$alumno->user->apellido}}</h2></td>
                    </tr>

                    <tr>
                        <th>PERIODOS</th>
                        <th rowspan="0"><label class="Rotate-90 ajustar">PRIMER PERIODO</label></th>

                        <th rowspan="0"><label class="Rotate-90 ajustar">SEGUNDO PERIODO</label></th>

                        <th rowspan="0"><label class="Rotate-90 ajustar">TERCER PERIODO</label></th>

                        <th rowspan="0"><label class="Rotate-90 ajustar">CUARTO PERIODO</label></th>
                        <th rowspan="0"><label class="Rotate-90 ajustar">PUNTAJE FINAL</label></th>
                        <th rowspan="0"><label class="Rotate-90 ajustar">PROMEDIO FINAL</label></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $promedioGlobal =0?>
                    @foreach($orderMaterias as $orderMateria)
                        @foreach($alumno->matriculas[0]->gradoseccion->materiagrados as $materiagrado)
                            @if($materiagrado->idMateria==$orderMateria->id)
                                @if($materiagrado->idMateria!=14)


                                    <tr>
                                        <td><h3 class="text-uppercase">{{$materiagrado->materium->nombre}}</h3></td>

					                    <?php
					                    $rev = false;
					                    $com= false;
					                    $int= false;
					                    $exa= false;
					                    $revision=NULL;
					                    $complementarias =NULL;
					                    $integradoras=NULL;
					                    $examen =NULL;?>

                                            <!--Primer Periodo-->
	                                    <?php
	                                    $rev = false;
	                                    $com= false;
	                                    $int= false;
	                                    $exa= false;
	                                    $revision=NULL;
	                                    $complementarias =NULL;
	                                    $integradoras=NULL;
	                                    $examen =NULL;?>
                                        @foreach($materiagrado->notas as $nota)

                                            @if($nota->idMateriaGrado == $materiagrado->id && $nota->idPeriodos ==1)
                                                @if($nota->idEstudiante == $alumno->id)
                                                    @if($nota->idTipoNota==1)

                                                        <?php
							                                    $rev=true;
							                                    $revision= round($nota->nota*0.15,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==2)

                                                        <?php
							                                    $com= true;
							                                    $complementarias=round($nota->nota*0.20,1);
							                                   ?>

                                                    @endif
                                                    @if($nota->idTipoNota==3)

                                                       <?php
							                                    $int= true;
							                                    $integradoras =round($nota->nota*0.35,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==4)

                                                       <?php
							                                    $exa=true;
							                                    $examen =round($nota->nota*0.30,1);
							                                    ?>

                                                    @endif

                                                @endif
                                            @endif
	                                            <?php $promedio_p1 = $revision+$complementarias+$integradoras+$examen; ?>
                                                    @endforeach

                                        <!--Fin Primer Periodo-->


                                        <!--Segundo Periodo-->
	                                    <?php
	                                    $rev = false;
	                                    $com= false;
	                                    $int= false;
	                                    $exa= false;
	                                    $revision=NULL;
	                                    $complementarias =NULL;
	                                    $integradoras=NULL;
	                                    $examen =NULL;?>
                                        @foreach($materiagrado->notas as $nota)

                                            @if($nota->idMateriaGrado == $materiagrado->id && $nota->idPeriodos ==2)
                                                @if($nota->idEstudiante == $alumno->id)
                                                    @if($nota->idTipoNota==1)

                                                        <?php
							                                    $rev=true;
							                                    $revision= round($nota->nota*0.15,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==2)

                                                        <?php
							                                    $com= true;
							                                    $complementarias=round($nota->nota*0.20,1);
							                                   ?>

                                                    @endif
                                                    @if($nota->idTipoNota==3)

                                                       <?php
							                                    $int= true;
							                                    $integradoras =round($nota->nota*0.35,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==4)

                                                       <?php
							                                    $exa=true;
							                                    $examen =round($nota->nota*0.30,1);
							                                    ?>

                                                    @endif

                                                @endif
                                            @endif
	                                            <?php $promedio_p2 = $revision+$complementarias+$integradoras+$examen; ?>
                                                    @endforeach

                                        <!--Fin Segundo Periodo-->


                                        <!--Tercer Periodo-->
	                                    <?php
	                                    $rev = false;
	                                    $com= false;
	                                    $int= false;
	                                    $exa= false;
	                                    $revision=NULL;
	                                    $complementarias =NULL;
	                                    $integradoras=NULL;
	                                    $examen =NULL;?>
                                        @foreach($materiagrado->notas as $nota)

                                            @if($nota->idMateriaGrado == $materiagrado->id && $nota->idPeriodos ==3)
                                                @if($nota->idEstudiante == $alumno->id)
                                                    @if($nota->idTipoNota==1)

                                                        <?php
							                                    $rev=true;
							                                    $revision= round($nota->nota*0.15,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==2)

                                                        <?php
							                                    $com= true;
							                                    $complementarias=round($nota->nota*0.20,1);
							                                   ?>

                                                    @endif
                                                    @if($nota->idTipoNota==3)

                                                       <?php
							                                    $int= true;
							                                    $integradoras =round($nota->nota*0.35,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==4)

                                                       <?php
							                                    $exa=true;
							                                    $examen =round($nota->nota*0.30,1);
							                                    ?>

                                                    @endif

                                                @endif
                                            @endif
	                                            <?php $promedio_p3 = $revision+$complementarias+$integradoras+$examen; ?>
                                                    @endforeach

                                        <!--Fin Tercer Periodo-->

                                        <!--Cuarto Periodo-->
	                                    <?php
	                                    $rev = false;
	                                    $com= false;
	                                    $int= false;
	                                    $exa= false;
	                                    $revision=NULL;
	                                    $complementarias =NULL;
	                                    $integradoras=NULL;
	                                    $examen =NULL;?>
                                        @foreach($materiagrado->notas as $nota)

                                            @if($nota->idMateriaGrado == $materiagrado->id && $nota->idPeriodos ==4)
                                                @if($nota->idEstudiante == $alumno->id)
                                                    @if($nota->idTipoNota==1)

                                                        <?php
							                                    $rev=true;
							                                    $revision= round($nota->nota*0.15,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==2)

                                                        <?php
							                                    $com= true;
							                                    $complementarias=round($nota->nota*0.20,1);
							                                   ?>

                                                    @endif
                                                    @if($nota->idTipoNota==3)

                                                       <?php
							                                    $int= true;
							                                    $integradoras =round($nota->nota*0.35,1);
							                                    ?>

                                                    @endif
                                                    @if($nota->idTipoNota==4)

                                                       <?php
							                                    $exa=true;
							                                    $examen =round($nota->nota*0.30,1);
							                                    ?>

                                                    @endif

                                                @endif
                                            @endif
	                                            <?php $promedio_p4 = $revision+$complementarias+$integradoras+$examen; ?>
                                                    @endforeach

                                        <!--Fin Tercer Periodo-->

					                    <?php
					                    $nota1 =0;
					                    $contadorNota1 =0;
					                    $nota2 =0;
					                    $contadorNota2 =0;
					                    $nota3 =0;
					                    $contadorNota3 =0;
					                    $nota4 =0;
					                    $contadorNota4 =0;
					                    ?>

                                            <!--Puntaje promedio periodo 1-->
                                        <?php
                                        $rev=true;
                                        $revision= ($promedio_p1)*0.25;
                                        echo round($revision,1)?>
                                        <!--fin puntaje promedio 1-->

                                        <!--Puntaje promedio 2-->
                                        <?php
                                        $rev=true;
                                        $revision= ($promedio_p2)*0.25;
                                        echo round($revision,1)?>
                                        <!--fin puntaje promedio 2-->

                                        <!--puntaje promedio 3-->
                                        <?php
                                        $rev=true;
                                        $revision= ($promedio_p3)*0.25;
                                        echo round($revision,1)?>
                                        <!--fin puntaje promedio 3-->

                                        <!--puntaje promedio 4-->
                                        <?php
                                        $rev=true;
                                        $revision= ($promedio_p4)*0.25;
                                        echo round($revision,1)?>
                                        <!--fin puntaje promedio 4-->





                                                            <td><h3 class="text-center">{{round($promedio_p1,1)}}</h3></td>

                                                            <td><h3 class="text-center">{{round($promedio_p2,1)}}</h3></td>

                                                            <td><h3 class="text-center">{{round($promedio_p3,1)}}</h3></td>

                                                            <td><h3 class="text-center">{{round($promedio_p4,1)}}</h3></td>
                                                            <td><h3 class="text-center"></h3>
                                                                <!-- sumatoria de los 4 puntajes obtenidos de cada periodo -->
                                                            </td>




                                            <td><h3 class="text-center"><b><?php $promedio = $promedio_p1+$promedio_p2+$promedio_p3+$promedio_p4;
									                    $promedioGlobal=$promedioGlobal+$promedio;
									                    echo round($promedio/4,1)?></b></h3>


                                            </td>
                                    </tr>
                               @endif
                            @endif
                        @endforeach
                    @endforeach



                    <br>
                    <tr>
                        <td colspan="3">PORCENTAJE DE ASISTENCIAS</td>

                        <td>
                            <?php $nasistncia =0?>
                            @foreach($alumno->datosboleta as $boleta)

                                    <?php
                                    $nasistncia = $nasistncia+ $boleta->porcentajeAsistencia*10;
                                    ?>



                            @endforeach
                                {{round($nasistncia/4,1)}}
                            %</td>
                    </tr>
                    </tbody>
                </table>

                <h4>OBSERVACIONES</h4>
                <textarea name="observaciones" id="observacion" cols="164" rows="5">@foreach($alumno->datosboleta as $boleta)@if($boleta->idPeriodo=4){{$boleta->Observaciones}}@endif @endforeach</textarea><br><br><br><br><br>
                <h4>__________________________________</h4>
                <h6 class="docente">DOCENTE RESPONSABLE DE SECCIÓN</h6>
                <h4 class="pull-right director">__________________________________</h4><br>
                <h6 class="pull-right director2">DIRECTOR/A</h6>
            </div>
        </div><!-- /.col -->
    </div><!-- /.col -->
    </div><!-- /.row -->

    <?php $nVueltas++?>


    @endif

@endforeach
</body>
</html>