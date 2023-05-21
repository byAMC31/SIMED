<?php

namespace App\Http\Controllers;

//use Laravel\Jetstream\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Consulta extends Controller
{ 
    
    public function show()
    {
        $user = Auth::user();
        $direccion = $user->estudiante->direccion;
        $estudiante = $user->estudiante;
        $expediente = $user->estudiante->expediente;
        $contacto = $user->estudiante->expediente->contacto;
        $consulta = $user->estudiante->expediente->consulta;
        foreach ($consulta as $singleConsulta) {
            $singleConsulta->examenFisico = $singleConsulta->examenFisico;
            $singleConsulta->receta = $singleConsulta->receta;       
        }
        return view('consulta', compact('direccion', 'expediente', 'estudiante', 'contacto', 'consulta'));
    }
    
    
    
    


}
