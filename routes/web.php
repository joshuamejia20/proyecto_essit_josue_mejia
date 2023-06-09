<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProyectoController::class, 'index'])->name('proyecto.index');

Route::get('/reporte', [App\Http\Controllers\ProyectoController::class, 'pdf'])->name('proyectos.pdf');

Route::resource('/proyecto', ProyectoController::class);
