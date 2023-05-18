<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function show(User $user)
{
    $direccion = $user->estudiante->direccion;
    return view('users.show', compact('user', 'direccion'));
}

    // Agregar los métodos create(), store(), show(), edit(), update(), destroy() según sea necesario
}
