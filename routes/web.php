<?php


use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReporteController;
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
Route::get('reportes/pdf', [ReporteController::class, 'pdf'])->name('home');
Route::get('Reporte/{reporte}/Ver', [ReporteController::class, 'show'])->name('menus.show');
Route::get('Crear', [ReporteController::class,'create'])->name('menus.creacion');
Route::post('guardar', [ReporteController::class, 'store'])->name('menus.store');
Route::get('/soporte', [ReporteController::class,'index'])->name('menus.visualizacion');
//Route::view('Edición','menus/edicion')->name('edicion');
Route::get('Reporte/{reporte}/Edicion', [ReporteController::class, 'edit'])->name('menus.edicion');
Route::put('Reporte/{reporte}/Actualizar', [ReporteController::class, 'update'])->name('menus.update');

//Rutas para area contabilidad
Route::get('/Contabilidad', [ContabilidadController::class,'index'])->name('contabilidad.inicio');

//Rutas para area de ventas

Route::resource('ventas', App\Http\Controllers\VentaController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);