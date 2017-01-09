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
use App\Utilities\MoodleEngine;
use Maatwebsite\Excel\Facades\Excel;


//------Main--//
Route::get('/', 'MainController@home');

Route::get("/pruebaMoodle",function(){

    $moodle = new MoodleEngine();
   return  $moodle->addStudent('');


});
Route::get('TestExcel',function (){

    Excel::create('Laravel Excel', function($excel) {

        $excel->sheet('Productos', function($sheet) {

            $products = \App\Models\User::where('idTipoUsuario','1')->with('estudiantes')->get();

            $sheet->fromArray($products
            );

        });
    })->export('xls');
});
Route::get('/instalaciones', 'MainController@instalacion');
Route::get('/historia', 'MainController@historia');
Route::get('/error404', 'MainController@error404');
Route::get('/galeria', 'MainController@galery');




//------Matriculas--//
Route::get('/inscripcion', 'InscriptionController@inscription');
Route::get('/formulario', 'InscriptionController@formulary');
Route::post('/formulario', 'InscriptionController@registrarEstudiante')->name('Registrar.Estudiante');
Route::post('/NuevoHijoRegistro/{id}', 'InscriptionController@registrarHijo')->name('Registrar.NuevoHijo');
Route::get('/propuesta', 'InscriptionController@afiche');
Route::get('/registro_matricula', 'InscriptionController@dash_inscription');
Route::get('/nueva', 'InscriptionController@local_inscription');
Route::get('/registro', 'InscriptionController@registro');
Route::get('/AlumnosPorGrado/{id}','InscriptionController@registroGrado')->name('Alumnos.Grado');
Route::get('/noticias', 'InscriptionController@noticias');
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
Route::get('ImpartirMateria','MateriasController@ImpartirMateria');
Route::post('InsertarImpartirMateria','MateriasController@InsertImpartirMateria')->name('Materia.InsertarImpartir');

Route::get('NuevoHorario/{id}','MateriasController@NuevoHorario')->name('Materias.NuevoHorario');
Route::post('InsertarHorarioMateria/{id}','MateriasController@InsertHorarioMateria')->name('Materias.InsertHorario');

//------Docentes--//
Route::get('NuevoMaestro','MaestrosController@NuevoMaestro')->name('Maestro.Nuevo');
Route::post('InsertarMaestro','MaestrosController@InsertarMaestro')->name('Maestro.Insert');
Route::get('MostrarMaestros','MaestrosController@MostrarMaestros')->name('Maestros.Mostrar');
Route::get('ActualizarMaestro/{id}','MaestrosController@ActualizarMaestro')->name('Maestros.Actualizar');
Route::put('UpdateMaestro/{id}','MaestrosController@UpdateMaestro')->name('Maestro.Update');
Route::get('EliminarMaestro/{id}','MaestrosController@EliminarMaestro')->name('Maestro.Delete');

Route::get('MaestroGrado','MaestrosCOntroller@MaestroGrado')->name('Maestros.Grados');
Route::post('InsertMaestroGrado','MaestrosController@InsertMaestroGrado')->name('Maestros.Grado.Insert');
Route::get('MaestroMateria/{id}','MaestrosController@MaestroMateria')->name('Maestros.MateriasAsignar');
Route::put('InsertMaestroMateria','MaestrosController@InsertMaestroMateria')->name('Maestros.MateriasInsert');

Route::get('/teacher_profile', 'TeachersController@perfil');
Route::get('/dash_teacher', 'TeachersController@dashboard');
Route::get('/listado_maestros', 'TeachersController@listadoMaestros');
Route::get('/materias_impartidas', 'TeachersController@materiasImpartidas');
Route::get('/ingresar_materias', 'TeachersController@ingresarMateria');
Route::get('/ingresar_grado', 'TeachersController@ingresarGrados');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/download/{tipo}', 'PdfController@crear_prospecto');

Route::post('getMunicipios', 'InscriptionController@getMunicipios')->name('getMun');

Route::get('getHackeados/{email}',function($email){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://hesidohackeado.com/api?q='.$email);
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
});
