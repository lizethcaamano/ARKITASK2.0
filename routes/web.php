<?php

use App\Http\Controllers\ActividadesController;
use App\Actividades;
use App\Entregables;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Http\Controllers\Auth\CambiarContrasenaController;

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
    return view('homeArki');

});
Route::resource('asistencia', 'AsistenciaController')->middleware('miautenticacion');

Route::resource('proyecto', 'ProyectoController');

Route::resource('proyecto', 'ProyectoController')->middleware('miautenticacion');



Route::resource('catalogo', 'CatalogoController')->middleware('miautenticacion');


Route::resource('Usuario','UsuarioController');

Route::resource('Encargado','EncargadoController')->middleware('miautenticacion');

Route::resource('Grupo','GruposTrabajoController')->middleware('miautenticacion');

Route::resource('actividades', 'ActividadesController')->middleware('miautenticacion');

Route::resource('entregables', 'EntregablesController')->middleware('miautenticacion');

Route::resource('proyectoT', 'ProyectosTerminadosController')->middleware('miautenticacion');



Route::get('plantilla', function () {
    return view('Templates.administrador');


});

Route::get('reporte', 'AsistenciaController@reporte');

// Rutas para el login y el logout
 Route::get('login','Auth\LoginController@form');
 Route::post('login','Auth\LoginController@login');
 Route::get('logout','Auth\LoginController@logout');

 Route::resource('gerente/Entregables','EntregablesGerenteController')->middleware('miautenticacion');
 Route::resource('gerente/Actividades','ActividadesGerenteController')->middleware('miautenticacion');
 Route::resource('actividades', 'ActividadesController')->middleware('miautenticacion');
 Route::resource('entregables', 'EntregablesController');
 Route::get('entregables/{IdArchivo}/habilitar','EntregablesController@habilitar');
 Route::get('gerente/Entregables/{IdArchivo}/habilitar','EntregablesGerenteController@habilitar');
 Route::get('/entregables/{IdArchivo}/rechazado', [Entregables::class , 'rechazado']);
 Route::post('/actividad/crear', [ActividadesController::class , 'store'])->name('actividad.store');
 Route::get('/actividad/editar', [ActividadesController::class , 'update'])->name('actividad.update');
 Route::get('/actividad/json', function (Actividades $actividad) {
     $actividad = Actividades::all();
     return $actividad;
 });

  //Auth::Routes();
  Route::get('prueba-email', function(){

    Mail::to('jsgaravito90@misena.edu.co')
    ->send(new TestMail() );
    die ('correo enviado');
   });


