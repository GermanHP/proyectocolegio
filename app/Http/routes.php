<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Models\User;
use App\Utilities\MoodleEngine;





Route::group(['middleware' => ['SSL']], function () {
    //------Main--//
    Route::get('/', 'MainController@home')->name('Principal');

    /*Route::get("/pruebaMoodle",function(){

        $moodle = new MoodleEngine();
        return  $moodle->addStudent('');


    });
*/




    Route::resource('Login','LoginController');
    Route::group(['middleware' => 'auth'], function () {



        Route::get('Redireccionador',function(){
            setcookie('MoodleSession','',time()-1000000, "/", ".colegiosjb.net");
            $usuario = User::find(Auth::user()->id);
            if($usuario->idTipousuario==5){
                if($usuario->resetPassword==1){
                    return redirect()->route('cambiar.Password');
                }
                return redirect()->route('registro.index');
            }else if($usuario->idTipousuario==3) {
                if($usuario->resetPassword==1){
                    return redirect()->route('cambiar.Password');
                }
                return redirect()->route('MisMaterias.Maestro');
            }else if($usuario->idTipousuario==1) {
                if($usuario->resetPassword==1){
                    return redirect()->route('cambiar.Password');
                }
                return redirect()->route('Alumno.MisClases');
            }else if($usuario->idTipousuario==2) {
                if($usuario->resetPassword==1){
                    return redirect()->route('cambiar.Password');
                }
                return redirect()->route('Padres.MisHijos');
            }else{
                return redirect('/logout');
            }
        });
        //Rutas de Maestros y Personal Administrativo
       Route::group(['middleware' => 'PersonalAdministrativo'], function () {
            //------Matriculas--//


            Route::get('CorregirHijos',function(){
                $padres = \App\Models\Padredefamilium::all();
                $cont=0;
                foreach ($padres as $padre){

                    if($padre->padreestudiantes->count()>1){
                        $cont++;
                        foreach ($padre->padreestudiantes as $padreestudiante){
                            $estudiantesconpadres = \App\Models\Padreestudiante::where('idEstudiante',$padreestudiante->idEstudiante)->get();

                            foreach ($estudiantesconpadres as $estudiantesconpadre){
                                $estudianteID= "";
                                if($estudiantesconpadre->idEstudiante ==$padreestudiante->idEstudiante){
                                    $estudianteID = $estudiantesconpadre->idEstudiante;

                                }
                                echo "Relacionar ". $estudianteID." con  $estudiantesconpadre->idPadre<br>";
                            }

                            echo "___________________________________<br>";

                        }
                    }
                }
                echo "$cont";

            });
            Route::get('ActualizarEstudiantes',function(){
                $usuarios = User::all();
                $contador=0;
                foreach ($usuarios as $estudiante){

                    if($estudiante->idTipousuario==1 && $estudiante->usuarioMoodle ==null){
                        $contador++;
                        $usergenetator = new \App\Utilities\GenerarToken();
                        $estudiante->fill([
                            'usuarioMoodle'=>$usergenetator->usergenerator(),
                            'passwordMoodle'=>$usergenetator->usergenerator(),
                        ]);
                        $estudiante->save();
                    }
                }
                echo $contador;
            });

            Route::get('ActualizarPadres',function(){
                $usuarios = User::all();
                $contador=0;
                foreach ($usuarios as $padre){
                    if($padre->idTipousuario==2 &&$padre->usuarioMoodle==null){
                        $usergenetator = new \App\Utilities\GenerarToken();

                        $contador++;
                        $padre->fill([
                            'usuarioMoodle'=>$usergenetator->usergenerator(),
                            'passwordMoodle'=>$usergenetator->usergenerator(),
                        ]);
                        $padre->save();
                    }
                }
                echo $contador;
            });
            Route::get('DataEstudiantes/{id}',function ($id){
                $grado = \App\Models\Gradoseccion::find($id);
                echo '<h1> Alumnos de '.$grado->grado->nombre.' '.$grado->seccion->nombre.'</h1><br>';
                echo 'UsuarioMoodle<br>';
                foreach ($grado->matriculas as $matricula){
                    echo $matricula->estudiante->user->usuarioMoodle.'<br>';

                }
                echo '<br>';
                echo 'PasswordMoodle<br>';
                foreach ($grado->matriculas as $matricula){
                    echo $matricula->estudiante->user->passwordMoodle.'<br>';

                }echo '<br>';
                echo 'Nombres<br>';
                foreach ($grado->matriculas as $matricula){
                    echo $matricula->estudiante->user->nombre.'<br>';

                }echo '<br>';
                echo 'Apellidos<br>';
                foreach ($grado->matriculas as $matricula){
                    echo $matricula->estudiante->user->apellido.'<br>';

                }echo '<br>';
                echo 'Email<br>';
                foreach ($grado->matriculas as $matricula){
                    echo $matricula->estudiante->user->email.'<br>';

                }
            });
            Route::get('/Encriptador/{Encriptar}', function ($Encriptar){
                echo bcrypt($Encriptar);
            });

            Route::get('/formulario', 'InscriptionController@formulary');
            Route::post('/formulario', 'InscriptionController@registrarEstudiante')->name('Registrar.Estudiante');
            Route::post('/NuevoHijoRegistro/{id}', 'InscriptionController@registrarHijo')->name('Registrar.NuevoHijo');

            Route::get('/registro_matricula', 'InscriptionController@dash_inscription');
            Route::get('/nueva', 'InscriptionController@local_inscription');
            Route::get('/registro', 'InscriptionController@registro')->name('registro.index');
            Route::get('/AlumnosPorGrado/{id}','InscriptionController@registroGrado')->name('Alumnos.Grado');
            Route::get('/noticias', 'InscriptionController@noticias');
            Route::post('GuardarNoticias','InscriptionController@guardarNoticia')->name('Noticias.Guardar');
            Route::get('/RegistrarGrado', 'InscriptionController@asignarGradoEstudiante')->name('NuevoGrado.View');
            Route::get('/GradosActivos','GradoSeccionController@GradosActivos');
            Route::get('DesactivarGrado/{id}','GradoSeccionController@DesactivarGrado')->name('Desactivar.Grado');
            Route::post('/RegistrarGradoNuevo','InscriptionController@NuevoGrado')->name('Nuevo.Grado');
            Route::get('/detalle_alumno/{id}', 'InscriptionController@detalleAlumno')->name('Detalle.Alumno');
            Route::get('/detalle_padre/{id}', 'InscriptionController@detallePadres')->name('Detalle.Padre');
            Route::get('NuevoHijo/{id}','InscriptionController@NuevoHijo')->name('Agregar.Hijo');
            Route::get('/listado_padres', 'InscriptionController@listadoPadres');
            Route::get('ActualizarEstudiante/{id}','ControllerEstudiante@ActualizarEstudiante')->name('Actualizar.Estudiante');
            Route::put('UpdatedeEstudiante/{id}','ControllerEstudiante@updateEstudiante')->name('update.estudiante');
            Route::get('ActualizarPadre/{id}','ControllerPadresFamilia@ActualizarPadre')->name('Actualizar.Padre');
            Route::put('updatePadre/{id}','ControllerPadresFamilia@UpdatePadre')->name('Update.Padre');

            Route::get('MateriasPorGrado/{id}','GradoSeccionController@MateriasPorGrado')->name('GradoSeccion.Materias');
            Route::get('DesactivarResposanble/{id}','MaestrosController@DesactivarMaestroResponsable')->name('Desactivar.MaestroResponsable');

//--Materias--//

            Route::get('NuevaMateria','MateriasController@NuevaMateria')->name('Materia.Nueva');
            Route::post('InsertarMateria','MateriasController@InsertMateria')->name('Materia.Insertar');
            Route::get('Materias','MateriasController@MostrarMaterias');
            Route::get('EliminarMateria/{id}','MateriasController@EliminarMateria')->name('Materia.Eliminar');
            Route::get('ImpartirMateria/{id}','MateriasController@ImpartirMateria')->name('ImpartirMateria.View');
            Route::post('InsertarImpartirMateria','MateriasController@InsertImpartirMateria')->name('Materia.InsertarImpartir');

            Route::get('NuevoHorario/{id}','MateriasController@NuevoHorario')->name('Materias.NuevoHorario');
            Route::post('InsertarHorarioMateria/{id}','MateriasController@InsertHorarioMateria')->name('Materias.InsertHorario');
            Route::get('EliminarHorario/{id}','MateriasController@EliminarHorarioMateria')->name('Materias.EliminarHorario');

//------Docentes--//
            Route::get('NuevoMaestro','MaestrosController@NuevoMaestro')->name('Maestro.Nuevo');
            Route::post('InsertarMaestro','MaestrosController@InsertarMaestro')->name('Maestro.Insert');
            Route::get('MostrarMaestros','MaestrosController@MostrarMaestros')->name('Maestros.Mostrar');
            Route::get('ActualizarMaestro/{id}','MaestrosController@ActualizarMaestro')->name('Maestros.Actualizar');
            Route::put('UpdateMaestro/{id}','MaestrosController@UpdateMaestro')->name('Maestro.Update');
            Route::get('EliminarMaestro/{id}','MaestrosController@EliminarMaestro')->name('Maestro.Delete');

            Route::get('MaestroGrado','MaestrosController@MaestroGrado')->name('Maestros.Grados');
            Route::post('InsertMaestroGrado','MaestrosController@InsertMaestroGrado')->name('Maestros.Grado.Insert');
            Route::get('MaestroMateria/{id}','MaestrosController@MaestroMateria')->name('Maestros.MateriasAsignar');
            Route::put('InsertMaestroMateria','MaestrosController@InsertMaestroMateria')->name('Maestros.MateriasInsert');


            Route::get('/listado_maestros', 'TeachersController@listadoMaestros');
            Route::get('/materias_impartidas', 'TeachersController@materiasImpartidas');
            Route::get('/ingresar_materias', 'TeachersController@ingresarMateria');
            Route::get('/ingresar_grado', 'TeachersController@ingresarGrados');

            Route::get('/CambiarPassword','InscriptionController@CambiarPassowrd')->name('cambiar.Password');
            Route::post('CambiarCotraseñaUpdate','InscriptionController@PasswordNuevo')->name('cambiar.Password.Nuevo');
            Route::get('ResetearContraseñaAlumno/{id}','MaestrosController@ResetearContraseñaAlumno')->name('ResetearPassword.Alumno');
            Route::get('MisMaterias','MaestrosController@MisMaterias')->name('MisMaterias.Maestro');

            //MATERIAS GENRALES
            Route::get('MateriasALL','MaestrosController@MateriasGenerales');
            Route::get('NotasAll/{id}','NotasController@NotasGenerales')->name('Notas.ALL');

            Route::get('Notas/{id}','NotasController@IngresarNotas')->name('Notas.Ingresar');
            Route::post('NotasUpdate/{id}','NotasController@GuardarNotas')->name('Notas.Insertar');
            Route::get('NotasPrepa/{id}','NotasPreparatoria@ingresarNotas')->name('Notas.Prepara');
            Route::post('NotasPrepaInser/{id}','NotasPreparatoria@insertNotas')->name('Notas.InsertarPrepa');
            Route::get('BloquearUsuarios','BloquearUsuariosController@MostrarAlumnos')->name('Bloquear.Mostrar');
            Route::get('BloquearAlumno/{id}','BloquearUsuariosController@BloquearUsuarios')->name('Bloquear.Bloquear');
            Route::get('Desbloquear/{id}','BloquearUsuariosController@DesBloquearUsuarios')->name('Bloquear.Desbloquear');
            Route::get('GradosBoleta','BoletaController@MostrarGrados')->name('Boleta.Mostrar.Grados');
            Route::get('BoletasInformacion/{id}','BoletaController@AgregarDatosBoleta')->name('Boleta.Datos');
            Route::post('BoletasGuardarInformacion/{id}','BoletaController@GuardarDatosBoleta')->name('Boletas.GuardarInformacion');
            Route::get('/moodle', 'MainController@ingresar');
            Route::get('/DescargarBoleta','BoletaController@DescargarBoleta');
            Route::get('/DescargarBoleta/{id}','BoletaController@DescargarBoletaGradoo')->name('Descargar.BoletaGrado');


            //Rutas de Kinder
            Route::get('NuevaAreaDeDesarrollo','NotasPrepaController@NuevosAreasDeDesarrollo')->name('Notas.prepa.NuevaArea');
            Route::post('GuardarAreaDeDesarrollo','NotasPrepaController@GuardarAreasDeDesarollo')->name('Notas.Prepa.GuardarArea');
            Route::get('MostrarAreasKinder','NotasPrepaController@MostrarAreasDeDesarrollo')->name('Notas.Prepa.MostrarArea');
            Route::get('eliminarArea/{id}','NotasPrepaController@EliminarAreaDeDesarrollo')->name('Notas.Prepa.EliminarArea');

            Route::get('NuevoIndicador','NotasPrepaController@NuevoIndicador')->name('Notas.NuevoIndicador');
            Route::post('GuardarNuevoIndicador','NotasPrepaController@GuardarNuevoIndicador')->name('Notas.GuardarNuevoIndicador');
            Route::get('MostrarIndicadoresDeLogro','NotasPrepaController@MostrarIndicadoresDeLogro')->name('Notas.MostrarIndicadoresDeLogro');
            Route::get('Eliminarindicador/{id}','NotasPrepaController@EliminarIndicador')->name('Notas.EliminarIndicador');

            Route::get('NotasKinder/{id}/{idArea}','NotasPrepaController@NotasNuevas')->name('Notas.Prepa.Nuevas');
            Route::post('NotasKinderGuardar/{id}/{idArea}','NotasPrepaController@GuardarNotas')->name('Notas.Prepa.NuevasGuardaar');
            Route::get('SeleccionarAreaKinder','NotasPrepaController@SeleccionarAreaKinder')->name('Notas.Prepa.SeleccionarArea');


        });

        Route::group(['middleware'=>'BloqueadoUsuarioMiddlewares'],function (){
            //Rutas para Alumno
            Route::group(['middleware' => 'AlumnosMiddleware'], function () {

                Route::get('MisAsignaturas','AlumnoController@MisClases')->name('Alumno.MisClases');
                Route::get('MisNotas/{id}','AlumnoController@MisNotas')->name('Alumno.Notas');
            });


            //Rutas para Padres de Familia
            Route::group(['middleware' => 'PadresDeFamiliaMiddleware'], function () {
                Route::get('MisHijos','PadresPanelController@Hijos')->name('Padres.MisHijos');
                Route::get('MateriasPorHIjo/{id}','PadresPanelController@MateriasHijo')->name('Padres.MateriasHijos');
                Route::get('NotasPorMateria/{id}/{idHijo}','PadresPanelController@NotasHijoMateria')->name('Padres.Notas.Materias');

            });
        });


        //Rutas Comunes para todos los Usuarios
        Route::get('CambiarEmail','InscriptionController@cambiarEmail')->name('cambiar.email');
        Route::post('UpdateEmail','InscriptionController@updateEmail')->name('cambiar.updateEmail');
        Route::get('/CambiarPassword','InscriptionController@CambiarPassowrd')->name('cambiar.Password');
        Route::post('CambiarCotraseñaUpdate','InscriptionController@PasswordNuevo')->name('cambiar.Password.Nuevo');
    });



    Route::get('/inscripcion', 'InscriptionController@inscription');
    Route::get('/propuesta', 'InscriptionController@afiche');
    Route::get('/teacher_profile', 'TeachersController@perfil');
    Route::get('/dash_teacher', 'TeachersController@dashboard');
    Route::get('/instalaciones', 'MainController@instalacion');
    Route::get('/historia', 'MainController@historia');
    Route::get('/error404', 'MainController@error404');
    Route::get('/galeria', 'MainController@galery');
    Route::get('/calendario', 'MainController@calendar');

    Route::get('verBoleta', 'MainController@verBoleta');


    Route::get('/Credenciales','PadresPanelController@Credenciales')->name('Credenciales.Buscar');
    Route::post('DatosLogin','PadresPanelController@DatosLogin')->name('Credenciales.Acceso');




    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('/download/{tipo}', 'PdfController@crear_prospecto');
    Route::get('Bloqueado','BloquearUsuariosController@Bloqueado')->name('Bloquear.bloqueado');

    Route::post('getMunicipios', 'InscriptionController@getMunicipios')->name('getMun');
});

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
    Route::post('login', 'LoginAPI@LoginUser');
    Route::post('loginG','Api@LoginUser');
    /*Route::group(['middleware' => 'jwt-auth'], function () {
        Route::get('getOrdenes/{id}', 'OrdenesAPI@getOrdenes');
        Route::get('getOrdenesPadre/{id}/{idCliente}', 'OrdenesAPI@getOrdenesPadre');
        Route::post('makeOrder', 'OrdenesAPI@makeOrder');
        Route::put('modifyOrder', 'OrdenesAPI@ModifyOrder');
        Route::put('cancelOrder', 'OrdenesAPI@CancelOrder');
        Route::put('executeOrder', 'OrdenesAPI@ExecuteOrder');
        Route::post('makemessage', 'OrdenesAPI@makeMessage');
        Route::get('getCasasAfiliado/{idCliente}', 'OrdenesAPI@getCasasAfiliado');
        Route::get('getCasasProceso/{idCliente}', 'OrdenesAPI@getCasasAfiliadoProcess');
        Route::get('getCedevales/{idCliente}', 'OrdenesAPI@getCedevales');
        Route::get('getOrdenesByClienteCasa/{idCliente}/{idCasa}', 'OrdenesAPI@getOrdenesByCasa');
    });*/
});



Route::get('getHackeados/{email}',function($email){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://hesidohackeado.com/api?q='.$email);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
});
