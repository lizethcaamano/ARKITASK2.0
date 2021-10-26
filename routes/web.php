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
    return view('welcome');

});


Route::resource('asistencia', 'AsistenciaController');

Route::resource('catalogo', 'CatalogoController');


Route::resource('proyecto', 'ProyectoController');

Route::resource('Usuario','UsuarioController');

Route::resource('Encargado','EncargadoProyectoController');

Route::resource('Grupo','GruposTrabajoController');

Route::resource('actividades', 'ActividadesController');

Route::resource('entregables', 'EntregablesController');

Route::get('plantilla', function () {
    return view('Templates.administrador');

});

Route::get('reporte', 'AsistenciaController@reporte');
