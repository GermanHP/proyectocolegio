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
                                <th>Revisión de Cuaderno</th>
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