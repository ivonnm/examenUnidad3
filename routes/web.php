<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonasController;
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

Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
//Ruta y metodo de crear
Route::get('personas/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('personas', [PersonasController::class, 'store'])->name('personas.store');
//Ruta y metodo de actualizar
Route::get('personas/actualizar', [PersonasController::class, 'actualizar'])->name('personas.actualizar');
Route::put('index/{persona}', [PersonasController::class, 'update'])->name('personas.update');
//Eliminar
Route::delete('index/{persona}',  [PersonasController::class, 'destroy'])->name('personas.destroy');

