<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\expediente;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
Route::get('/expediente', [DireccionController::class, 'show'])->name('expediente.show');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::get('/expediente/edit', [DireccionController::class, 'edit'])->name('expediente.edit');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::post('/expediente/edit', [DireccionController::class, 'update'])->name('expediente.update');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::get('/expediente/usuarioedit', [EstudianteController::class, 'edit'])->name('usuario.edit');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::post('/expediente/usuarioedit', [EstudianteController::class, 'update'])->name('usuario.update');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::get('/expediente/expedienteedit', [expediente::class, 'edit'])->name('informacionMedica.edit');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::post('/expediente/expedienteedit', [expediente::class, 'update'])->name('informacionMedica.update');
});


