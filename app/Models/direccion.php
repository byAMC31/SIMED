<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Direccion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_direccion';

    // Si el nombre de la tabla no es el plural del nombre de la clase en inglés, 
    // necesitas definir la propiedad $table con el nombre de la tabla
    protected $table = 'direccion';

    // Si los timestamps (created_at y updated_at) no son necesarios en tu tabla, 
    // añade la siguiente línea
    public $timestamps = false;

    protected $fillable = [
        'estadoDir',
        'municipioDir',
        'coloniaDir',
        'calleDir',
        'nExteriorDir',
        'nInteriorDir',
        'codigoPostalDir',
        // Añade aquí cualquier otro campo que quieras que sea asignable en masa
    ];

    // Define aquí las relaciones con otros modelos si las hay

    // Como ejemplo, si una Direccion pertenece a un Estudiante:
    public function estudiante()
    {
        return $this->hasOne(Estudiante::class, 'id_direccion', 'id_direccion');
    }

    public function contacto()
    {
        return $this->hasOne(contacto::class, 'id_direccion', 'id_direccion');
    }


}
