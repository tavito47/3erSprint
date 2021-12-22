<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoEmpresaController;
use App\Http\Controllers\PliegoController;
use App\Http\Controllers\ConvocatoriaController;
use App\Http\Controllers\PlanificacionController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('auth.login');
});
*/

// Route::get('/vista', function () {
//     return view('vista');
// });

Route::get('/', function () {
    return view('vistaPrincipal');
});


Route::resource('pliegos',PliegoController::class);
Route::resource('grupoempresa',GrupoEmpresaController::class);
Auth::routes();

//Route::get('/home',[GrupoEmpresaController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function(){
//Route::get('/', [GrupoEmpresaController::class, 'index'])->name('home');

});

Route::resource('sobres', App\Http\Controllers\SobreController::class);

Route::resource('contrato', ContratoController::class);

Route::resource('planificacion', App\Http\Controllers\PlanificacionController::class);

Route::resource('convocatoria',ConvocatoriaController::class);

Route::resource('reporte', ReporteController::class);

Route::post('/convocatoria', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

Route::get('/convocatoria:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');

Route::resource('fases', App\Http\Controllers\FaseController::class);

Route::post('aceptar', [ReporteController::class, 'aceptar']);
Route::post('rechazar', [ReporteController::class, 'rechazar']);
//Route::post('/planificacion', [App\Http\Controllers\ConvocatoriaController::class, 'store'])->name('vistaPrincipal');

//Route::get('/planificacion:get/{id}', [App\Http\Controllers\ConvocatoriaController::class, 'edit'])->name('editar');

