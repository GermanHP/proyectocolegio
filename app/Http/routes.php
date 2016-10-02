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


Route::get('/teacher_profile', 'TeachersController@perfil');
Route::get('/dash_teacher', 'TeachersController@dashboard');

Route::auth();

Route::get('/home', 'HomeController@index');

