<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // Si el nombre de la tabla no es el plural del nombre de la clase en inglés, 
    // necesitas definir la propiedad $table con el nombre de la tabla
    protected $table = 'estudiante';

    // Si los timestamps (created_at y updated_at) no son necesarios en tu tabla, 
    // añade la siguiente línea
    public $timestamps = false;

    protected $fillable = [
        'appAI',
        'apmAI',
        'sexoAI',
        'nTelAI',
        'nssAI',
        // Agrega aquí cualquier otro campo que quieras que sea asignable en masa
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera', 'id_carrera');
    }

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion', 'id_direccion');
    }
}
