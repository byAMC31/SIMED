<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class expediente extends Controller
{
    
    public function edit()
    {
        $user = Auth::user();
        $expediente = $user->estudiante->expediente;
        $estudiante = $user->estudiante; // Accediendo al estudiante

        return view('/expediente/expedienteedit', ['expediente' => $expediente],['estudiante' => $estudiante]);
    }
    
    


   public function update(Request $request)
{
    $user = Auth::user();
    $estudiante = $user->estudiante;
    
    // Actualizar el campo 'nssAI' en el modelo Estudiante
    $estudiante->nssAI = $request->input('nssAI');
    $estudiante->save();
    
    // Actualizar los demás campos en el modelo Expediente
    $expediente = $estudiante->expediente;
    $expediente->update($request->except('nssAI'));

    return redirect()->route('expediente.show');
}

}
