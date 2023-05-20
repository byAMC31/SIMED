<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\EstudianteController;

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


//Route::get('/expediente', function () {
  //  return view('expediente');
//})->name('expediente');



Route::get('/expediente', [DireccionController::class, 'show'])->name('expediente.show');



Route::get('/expediente/edit', [DireccionController::class, 'edit'])->name('expediente.edit');
Route::post('/expediente/edit', [DireccionController::class, 'update'])->name('expediente.update');




Route::get('/expediente/usuarioedit', [EstudianteController::class, 'edit'])->name('usuario.edit');
Route::post('/expediente/usuarioedit', [EstudianteController::class, 'update'])->name('usuario.update');


