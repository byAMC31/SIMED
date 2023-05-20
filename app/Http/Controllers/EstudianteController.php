<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }


    public function show2()
    {
        $user = Auth::user(); // Obteniendo el usuario actualmente autenticado
        $estudiante = $user->estudiante; // Accediendo a la dirección a través de la relación estudiante

        return view('expediente', ['estudiante' => $estudiante]); // Pasando la dirección a la vista
    }

    public function edit()
    {
        $user = Auth::user();
        $estudiante = $user->estudiante;
    
        return view('/expediente/usuarioedit', ['estudiante' => $estudiante]);
    }
    
    
   /* public function update(Request $request)
    {
        $user = Auth::user();
        $estudiante = $user->estudiante;
    
        $estudiante->update($request->all());
    
        return redirect()->route('expediente.show');
    }*/


    public function update(Request $request)
    {
        $user = Auth::user();
        $estudiante = $user->estudiante;

        // Asegurarse de que el campo 'name' se actualiza en el modelo User
        $user->name = $request->input('name');
        $user->save();
        
        // Actualizar los demás campos en el modelo Estudiante
        $estudiante->update($request->except('name'));
    
        return redirect()->route('expediente.show');
    }
}


