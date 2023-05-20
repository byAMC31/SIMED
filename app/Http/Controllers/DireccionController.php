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
    $estudiante = $user->estudiante; // Accediendo al estudiante
    $expediente = $user->estudiante->expediente; // Accediendo a la dirección a través de la relación 

    return view('expediente', compact('direccion', 'expediente','estudiante'));
}


  


    
    public function edit()
    {
        $user = Auth::user();
        $direccion = $user->estudiante->direccion;
    
        return view('/expediente/edit', ['direccion' => $direccion]);
    }
    
    
    public function update(Request $request)
    {
        $user = Auth::user();
        $direccion = $user->estudiante->direccion;
    
        $direccion->update($request->all());
    
        return redirect()->route('expediente.show');
    }





}







