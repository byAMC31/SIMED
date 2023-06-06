<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Estudiante; // Agregue esta línea
use App\Models\User;
use App\Models\Carrera; // Agregue esta línea
use App\Models\Direccion; // Agregue esta línea
use App\Models\expediente; // Agregue esta línea
use App\Models\contacto;

class registrodatos extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $direccion = $user->estudiante->direccion;
        $estudiante = $user->estudiante;
        $expediente = $user->estudiante->expediente;
        $contacto = $user->estudiante->expediente->contacto;
        $consulta = $user->estudiante->expediente->consulta;
       
    
        return view('/registrodatos/estudiante', compact('direccion', 'expediente', 'estudiante', 'contacto', 'consulta', 'user'));
    }


    public function create()
    {
        $user = Auth::user();
        $carreras = Carrera::all(); // Obtiene todas las carreras
        return view('registrodatos.create', compact('user', 'carreras')); // Envía las carreras a la vista
    }



    public function store(Request $request)
    {
        $request->validate([
            'appAI' => '',
            'apmAI' => '',
            'sexoAI' => 'required',
            'nTelAI' => 'required',
            'nssAI' => 'required',
            'nControl' => 'required',
            'id_carrera' => 'required|exists:carrera,id_carrera', // Asegura que la carrera exista

        ]);

        $user = Auth::user();
        $estudiante = new estudiante($request->all());
        $user->estudiante()->save($estudiante);

        return redirect()->route('registrodatos.createDireccion')->with('success', 'Estudiante registrado exitosamente!');
    }


    public function createDireccion()
{
    $user = Auth::user();
    return view('registrodatos.createDireccion', compact('user'));
}

public function storeDireccion(Request $request)
{
    $request->validate([
        'estadoDir' => 'required',
        'municipioDir' => 'required',
        'coloniaDir' => 'required',
        'calleDir' => 'required',
        'nExteriorDir' => 'required',
        'nInteriorDir' => 'required',
        'codigoPostalDir' => 'required',
    ]);

    $direccion = Direccion::create($request->all());
    $user = Auth::user();
    $user->estudiante->id_direccion = $direccion->id_direccion;
    $user->estudiante->save();

    return redirect()->route('registrodatos.createExpediente');
}



public function createExpediente()
    {
        return view('registrodatos.createExpediente');
    }


    public function storeExpediente(Request $request)
    {
        $data = $request->validate([
            'tipoSangreEx' => 'required',
            'alergiasEx' => 'required',
            'notasMedicasEx' => '',
        ]);
    
        $data['id'] = auth()->user()->estudiante->id;  // Añade el id del estudiante al expediente
    
        Expediente::create($data);
    
        return redirect()->route('registrodatos.createContacto');
    }

    public function createContacto()
{
    return view('registrodatos.createContacto');
}

public function storeContacto(Request $request)
{
    $request->validate([
        'nombreC' => 'required',
        'appC' => 'required',
        'apmC' => 'required',
        'relacionAlumnoC' => 'required',
        'nTelC' => 'required',

        'estadoDir' => 'required',
        'municipioDir' => 'required',
        'coloniaDir' => 'required',
        'calleDir' => 'required',
        'nExteriorDir' => 'required',
        'nInteriorDir' => 'required',
        'codigoPostalDir' => 'required',
    ]);

    // Primero crea la dirección
    $direccion = Direccion::create($request->only([
        'estadoDir',
        'municipioDir',
        'coloniaDir',
        'calleDir',
        'nExteriorDir',
        'nInteriorDir',
        'codigoPostalDir',
    ]));

    // Luego crea el contacto con la información de la solicitud
    $contacto = new Contacto($request->only([
        'nombreC',
        'appC',
        'apmC',
        'relacionAlumnoC',
        'nTelC',
    ]));

    // Asocia la dirección con el contacto y guarda el contacto
    $contacto->direccion()->associate($direccion);
    $contacto->save();

    // Busca el expediente del estudiante y actualiza el id_contacto con el id del contacto creado
    $expediente = Expediente::where('id', auth()->user()->estudiante->id)->first();
    $expediente->id_contacto = $contacto->id_contacto;
    $expediente->save();

    return redirect()->route('dashboard');
}








}
