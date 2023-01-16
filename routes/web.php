<?php
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('Crear', [ReporteController::class,'create'])->name('menus.creacion');
Route::post('guardar', [ReporteController::class, 'store'])->name('menus.store');
Route::get('Inicio', [ReporteController::class,'index'])->name('menus.visualizacion');
//Route::view('Edición','menus/edicion')->name('edicion');
Route::get('Reporte/{reporte}/Edicion', [ReporteController::class, 'edit'])->name('menus.edicion');
Route::put('Reporte/{reporte}/Actualizar', [ReporteController::class, 'update'])->name('menus.update');


