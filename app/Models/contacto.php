<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_contacto';

    // Si el nombre de la tabla no es el plural del nombre de la clase en inglés, 
    // necesitas definir la propiedad $table con el nombre de la tabla
    protected $table = 'contacto';

    // Si los timestamps (created_at y updated_at) no son necesarios en tu tabla, 
    // añade la siguiente línea
    public $timestamps = false;

    protected $fillable = [
        'nombreC',
        'appC',
        'apmC',
        'relacionAlumnoC',
        'nTelC',
    ];


    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'id_direccion', 'id_direccion');
    }


    
}
