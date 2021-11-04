<?php

use App\Http\Controllers\AsistenciaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');

});

Route::resource('proyecto', 'ProyectoController');

Route::resource('asistencia', 'AsistenciaController');

Route::resource('catalogo', 'CatalogoController');




Route::resource('Usuario','UsuarioController');

Route::resource('Encargado','EncargadoProyectoController');

Route::resource('Grupo','GruposTrabajoController');

Route::resource('actividades', 'ActividadesController');

Route::resource('entregables', 'EntregablesController');

Route::resource('proyectoT', 'ProyectosTerminadosController');

Route::get('plantilla', function () {
    return view('Templates.administrador');

//     Route::get('login','Auth\LoginController@form');
// Route::post('login','Auth\LoginController@login');
// Route::get('logout','Auth\LoginController@logout');

});

Route::get('reporte', 'AsistenciaController@reporte');

 Auth::routes();
