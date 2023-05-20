<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expediente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_expediente';

    // Si el nombre de la tabla no es el plural del nombre de la clase en inglés, 
    // necesitas definir la propiedad $table con el nombre de la tabla
    protected $table = 'expediente';

    // Si los timestamps (created_at y updated_at) no son necesarios en tu tabla, 
    // añade la siguiente línea
    public $timestamps = false;

    protected $fillable = [
        'tipoSangreEx',
        'alergiasEx',
        'notasMedicasEx',
    ];


    public function contacto()
    {
        return $this->belongsTo(contacto::class, 'id_contacto', 'id_contacto');
    }

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'id', 'id');
    }


}
