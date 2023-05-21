<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use Laravel\Jetstream\Auth;

use Illuminate\Http\Request;

class Consulta extends Controller
{
    
    public function show()
    {
        $user = Auth::user(); // Obteniendo el usuario actualmente autenticado
        $direccion = $user->estudiante->direccion; // Accediendo a la dirección a través de la relación estudiante
        $estudiante = $user->estudiante; // Accediendo al estudiante
        $expediente = $user->estudiante->expediente; // Accediendo a la dirección a través de la relación 
        $contacto = $user->estudiante->expediente->contacto;
        return view('consulta', compact('direccion', 'expediente','estudiante','contacto'));
    }
    


}
