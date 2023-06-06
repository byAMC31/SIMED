<?php

use App\Http\Controllers\Consulta;
use App\Http\Controllers\contacto;
use App\Http\Controllers\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\expediente;
use App\Http\Controllers\justificante;
use App\Http\Controllers\registrodatos;
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

Route::get('/', function () { return view('auth.login');});
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if (empty($user->estudiante)) {
            return redirect()->route('registrodatos.create');
        }else{return view('dashboard');}

        
    })->name('dashboard');
    
    Route::get('/registrodatos/create', [RegistroDatosController::class, 'create'])->name('registrodatos.create');
    Route::post('/registrodatos/store', [RegistroDatosController::class, 'store'])->name('registrodatos.store');
    // Agrega aquí otras rutas relacionadas con el registro de datos
});












Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
Route::get('/expediente', [DireccionController::class, 'show'])->name('expediente.show');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::get('/consulta', [Consulta::class, 'show'])->name('consulta.show');
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




Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::get('/expediente/contacto_edit', [contacto::class, 'edit'])->name('informacionContacto.edit');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::post('/expediente/contacto_edit', [contacto::class, 'update'])->name('informacionContacto.update');
});



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
    Route::get('/justificante', [justificante::class, 'show'])->name('justificante.show');
    });




    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
        Route::get('/registrodatos/estudiante', [registrodatos::class, 'show'])->name('registrodatos.show');
        Route::get('/registrodatos/create', [registrodatos::class, 'create'])->name('registrodatos.create');
        Route::post('/registrodatos/store', [registrodatos::class, 'store'])->name('registrodatos.store');
    });

    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {   
 Route::get('/registrodatos/createDireccion', [registrodatos::class, 'createDireccion'])->name('registrodatos.createDireccion');
Route::post('/registrodatos/storeDireccion', [registrodatos::class, 'storeDireccion'])->name('registrodatos.storeDireccion');


Route::get('/registrodatos/createExpediente', [registrodatos::class, 'createExpediente'])->name('registrodatos.createExpediente');
Route::post('/registrodatos/storeExpediente', [registrodatos::class, 'storeExpediente'])->name('registrodatos.storeExpediente');


Route::get('/registrodatos/createContacto', [registrodatos::class, 'createContacto'])->name('registrodatos.createContacto');
Route::post('/registrodatos/storeContacto', [registrodatos::class, 'storeContacto'])->name('registrodatos.storeContacto');


});






   