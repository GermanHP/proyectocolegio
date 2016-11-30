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

Route::get('/', 'MainController@home');
Route::get('/instalaciones', 'MainController@instalacion');
Route::get('/historia', 'MainController@historia');

Route::get('/inscripcion', 'InscriptionController@inscription');
Route::get('/formulario', 'InscriptionController@formulary');
Route::post('/formulario', 'InscriptionController@registrarEstudiante')->name('Registrar.Estudiante');
Route::get('/propuesta', 'InscriptionController@afiche');
Route::get('/registro_matricula', 'InscriptionController@dash_inscription');
Route::get('/nueva', 'InscriptionController@local_inscription');



Route::get('/teacher_profile', 'TeachersController@perfil');
Route::get('/dash_teacher', 'TeachersController@dashboard');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/download/{tipo}', 'PdfController@crear_prospecto');

