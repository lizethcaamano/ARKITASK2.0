<?php

use App\Http\Controllers\ActividadesController;
<<<<<<< HEAD
=======
use App\Http\Controllers\ActividadEncargadoController;
use App\Http\Controllers\ActividadesGerenteController;
>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2
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

<<<<<<< HEAD
 Route::resource('gerente/Entregables','EntregablesGerenteController')->middleware('miautenticacion');
 Route::resource('gerente/Actividades','ActividadesGerenteController')->middleware('miautenticacion');
 Route::resource('actividades', 'ActividadesController')->middleware('miautenticacion');
=======
 Route::resource('gerente/Entregables','EntregablesGerenteController');
 Route::resource('gerente/Actividades','ActividadesGerenteController');
 Route::resource('gerente/Asistencia','AsistenciaGerenteController');
 Route::resource('gerente/Proyecto','GerenteProyectoController');
 Route::post('gerente/gerente/actividad/crear', [ActividadesGerenteController::class , 'store'])->name('actividad.store');
 Route::resource('encargado/Actividades','ActividadEncargadoController');
 Route::post('encargado/Proyecto/crear', [EncargadoProyectoController::class , 'store'])->name('encargado.store');
 Route::post('encargado/encargado/actividad/crear', [ActividadEncargadoController::class , 'store'])->name('actividad.store');
 Route::resource('encargado/Asistencia','AsistenciaEncargadoController');
 Route::resource('encargado/Entregables','EntregablesEncargadoController');
 Route::resource('encargado/Proyecto','EncargadoProyectoController');
 Route::resource('actividades', 'ActividadesController');
>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2
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

<<<<<<< HEAD
  //Auth::Routes();
  Route::get('prueba-email', function(){

    Mail::to('jsgaravito90@misena.edu.co')
    ->send(new TestMail() );
    die ('correo enviado');
   });
=======
 //Rutas para el cambio de contraseña cuando el usuario es nuevo
Route::get('asignarcontra/{idUsuario}', 'Auth\CambiarContrasenaController@mostrarFormCambiarPass');
Route::post('asignarcontra/{idUsuario}', 'Auth\CambiarContrasenaController@cambiarContrasena');


// Rutas de recuperacion de contraseña por solicitud del usuario
Route::get('recuperar-password', "Auth\ResetPasswordController@emailform");
Route::post('link-seguridad', "Auth\ResetPasswordController@submitlink");
Route::get('reset-password/{token}', "Auth\ResetPasswordController@resetform");
Route::post('reset-password', "Auth\ResetPasswordController@resetpassword");



Route::get('prueba-email', function () {
    $detalles = [
        "Enviado por" => "Lizeth Caamaño"
    ];
    Mail::to('ldcaamano@misena.edu.co')
        ->send(new TestMail($detalles));
    die('Correo Enviado');
});
  //Auth::Routes();

>>>>>>> 02eace5ed143c5b250da821217b25c0cdec27de2


