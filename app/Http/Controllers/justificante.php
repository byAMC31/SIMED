<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class justificante extends Controller
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
            $singleConsulta->medico = $singleConsulta->medico; // Agregando los datos del medico
            // Añadir esta línea para cargar los medicamentos de la receta
            foreach ($singleConsulta->receta->medicamentosRecetados as $medRecetado) {
                $medRecetado->medicamento = $medRecetado->medicamento;
            }
        }
    
        return view('justificante', compact('direccion', 'expediente', 'estudiante', 'contacto', 'consulta', 'user'));
    }



}
