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
        size: A4 portrait;
        margin: 2cm;
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

    <div class="row teacherPage">
        <div class="col-md-12">

                <h2 class="text-center"><img src="http://colegiolocal.com/img/indexes/logo.jpg" alt="" height="100" width="100"><br></h2>
            <h3 class="text-center" id="titulo">INFORME DE CALIFICACIONES 2017<br></h3>
                <h3 class="text-center" id="titulo">COLEGIO "SAN JUAN BAUTISTA"<br></h3>
            <h3 class="text-center" id="titulo">GRADO<br><br></h3>


                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td colspan="10"><h4 class="text-center">ALUMNO/A:</h4></td>
                            </tr>
                            <tr>
                                <td colspan="10"><h4 class="text-center">PRIMER PERIODO</h4></td>
                            </tr>
                            <tr>
                                <th>Asignaturas</th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Revision de Cuaderno</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Puntaje</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Act. Complementarias</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Puntaje</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Act. Integradora</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Puntaje</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Prueba Objetiva <br> Exámen 30%</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Puntaje</label></th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Promedio Periodo</label></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ASIGNATURA</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>CONDUCTA</td>
                                <td colspan="8"></td>
                                <td>0%</td>
                            </tr>
                            <tr>
                                <td colspan="9">PROMEDIO GLOBAL</td>
                                <td>0</td>
                            </tr>
                            <br>
                            <tr>
                                <td colspan="3">PORCENTAJE DE ASISTENCIAS</td>
                                <td>0%</td>
                            </tr>
                            </tbody>
                        </table>

                        <h4>OBSERVACIONES</h4>
                        <textarea name="observaciones" id="observacion" cols="164" rows="5"></textarea><br><br><br><br><br>
                        <h4>__________________________________</h4>
                        <h6 class="docente">DOCENTE RESPONSABLE DE SECCIÓN</h6>
                        <h4 class="pull-right director">__________________________________</h4><br>
                        <h6 class="pull-right director2">DIRECTOR/A</h6>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.col -->
        </div><!-- /.row -->


</body>
</html>