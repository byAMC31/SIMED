<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class contacto extends Controller
{
  
    public function edit()
    {
        $user = Auth::user(); // Obteniendo el usuario actualmente autenticado
        //$direccion = $user->estudiante->direccion; // Accediendo a la dirección a través de la relación estudiante
        $estudiante = $user->estudiante; // Accediendo al estudiante
        $expediente = $user->estudiante->expediente; // Accediendo a la dirección a través de la relación 
          // Para inspeccionar el valor de $expediente
        $contacto = $user->estudiante->expediente->contacto;
        $direccion = $user->estudiante->expediente->contacto->direccion; // Accediendo a la dirección a través de la relación estudiante

        return view('/expediente/contacto_edit', compact('direccion', 'expediente','estudiante','contacto'));

    }
    
    


    public function update(Request $request)
    {
        $user = Auth::user(); // Obteniendo el usuario actualmente autenticado
        $contacto = $user->estudiante->expediente->contacto;    
        $contacto->nombreC = $request->input('nombreC');
        $contacto->appC = $request->input('appC');
        $contacto->apmC = $request->input('apmC');
        $contacto->relacionAlumnoC = $request->input('relacionAlumnoC');
        $contacto->nTelC = $request->input('nTelC');
        $contacto->save();
        
        $direccion = $user->estudiante->expediente->contacto->direccion;
        $direccion->estadoDir = $request->input('estadoDir');
        $direccion->municipioDir = $request->input('municipioDir');
        $direccion->coloniaDir = $request->input('coloniaDir');
        $direccion->calleDir = $request->input('calleDir');
        $direccion->nExteriorDir = $request->input('nExteriorDir');
        $direccion->nInteriorDir = $request->input('nInteriorDir');
        $direccion->codigoPostalDir = $request->input('codigoPostalDir');

        $direccion->save();
        return redirect()->route('expediente.show');
    }
    
    




}
