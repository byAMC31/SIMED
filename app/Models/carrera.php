<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_carrera';

    // Si el nombre de la tabla no es el plural del nombre de la clase en inglés, 
    // necesitas definir la propiedad $table con el nombre de la tabla
    protected $table = 'carrera';

    // Si los timestamps (created_at y updated_at) no son necesarios en tu tabla, 
    // añade la siguiente línea
    public $timestamps = false;

    protected $fillable = [
        'nombreCa',
        // Añade aquí cualquier otro campo que quieras que sea asignable en masa
    ];

    // Define aquí las relaciones con otros modelos si las hay

    // Como ejemplo, si un Carrera tiene muchos Estudiantes:
    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class, 'id_carrera', 'id_carrera');
    }
}
