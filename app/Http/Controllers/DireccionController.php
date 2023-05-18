<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Laravel\Jetstream\Auth;

class DireccionController extends Controller
{
    public function index()
    {
        $direcciones = Direccion::all();
        return view('direcciones.index', compact('direcciones'));
    }

    public function show()
    {
        $user = Auth::user(); // Obteniendo el usuario actualmente autenticado
        $direccion = $user->estudiante->direccion; // Accediendo a la dirección a través de la relación estudiante

        return view('expediente', ['direccion' => $direccion]); // Pasando la dirección a la vista
    }
    // Agregar los métodos create(), store(), show(), edit(), update(), destroy() según sea necesario
}
