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


</style>

<style>
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
        width: 80px;
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
            <div class="invoice">
                <h2 class="text-center"><img src="img/indexes/logo.jpg" alt="" height="100" width="100"><br></h2>
                <h2 class="page-header text-center" id="titulo">Colegio San Juan Bautista<br><br></h2>

                <div class="row invoice-info">
                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Asignatura</th>
                                <th rowspan="0"><label class="Rotate-90 ajustar">Revision de Cuaderno</label></th>
                                <th>Puntaje</th>
                                <th>Act. Complementarias</th>
                                <th>Puntaje</th>
                                <th>Act. Integradora</th>
                                <th>Puntaje</th>
                                <th>Prueba Objetiva Examen 30%</th>
                                <th>Puntaje</th>
                                <th>Promedio del Periodo</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Asignatura</td>
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
                                <td>Conducta</td>
                                <td colspan="8"></td>

                                <td>0%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    </div>



</body>
</html>