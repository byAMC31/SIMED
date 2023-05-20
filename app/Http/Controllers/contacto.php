<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class contacto extends Controller
{
    public function show2()
    {
        $user = Auth::user(); // Obteniendo el usuario actualmente autenticado
        $estudiante = $user->estudiante; // Accediendo a la dirección a través de la relación estudiante

        return view('expediente', ['estudiante' => $estudiante]); // Pasando la dirección a la vista
    }


    




}
