<?php

use App\Http\Controllers\RegimenController;
use App\Http\Controllers\ContribuyenteController;
use App\Http\Controllers\AvanceController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ActividadeController;
use App\Http\Controllers\CostoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\MkejecutivoController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\SpejecutivogController;
use App\Http\Controllers\SoporteController;
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

Route::get('/Sie', function () {
    return view('welcome');
});



//Rutas para area de Soporte
Route::resource('spejecutivos', App\Http\Controllers\SpejecutivoController::class);
Route::resource('soportes', App\Http\Controllers\SoporteController::class);
Route::get('reportes/pdf', [ReporteController::class, 'pdf'])->name('home');
Route::get('Reporte/{reporte}/Ver', [ReporteController::class, 'show'])->name('menus.show');
Route::get('Crear', [ReporteController::class,'create'])->name('menus.creacion');
Route::post('guardar', [ReporteController::class, 'store'])->name('menus.store');
Route::get('/soporte', [ReporteController::class,'index'])->name('menus.visualizacion');
//Route::view('Edición','menus/edicion')->name('edicion');
Route::get('Reporte/{reporte}/Edicion', [ReporteController::class, 'edit'])->name('menus.edicion');
Route::put('Reporte/{reporte}/Actualizar', [ReporteController::class, 'update'])->name('menus.update');



//Rutas para area contabilidad
Route::resource('contribuyentes', App\Http\Controllers\ContribuyenteController::class);
Route::resource('regimens', App\Http\Controllers\RegimenController::class);
Route::resource('avances', App\Http\Controllers\AvanceController::class);
Route::get('/vista', [ContribuyenteController::class, 'vista']) ->name('contribuyente.vista');



//Rutas para area de ventas
Route::resource('ventas', App\Http\Controllers\VentaController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('contactos', App\Http\Controllers\ContactoController::class);
Route::resource('actividades', App\Http\Controllers\ActividadeController::class);
Route::resource('costos', App\Http\Controllers\CostoController::class);

//Rutas para area de Marketing
Route::resource('marketings', App\Http\Controllers\MarketingController::class);
Route::resource('mkejecutivos', App\Http\Controllers\MkejecutivoController::class);
