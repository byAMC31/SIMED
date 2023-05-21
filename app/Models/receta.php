<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;

    protected $table = 'receta';

    protected $primaryKey = 'id_receta';

    protected $fillable = [
        'instruccionesR',
    ];

    public function medicamentosRecetados(){
        return $this->hasMany(MedicamentosRecetados::class, 'id_receta');
    }

    public function consulta()
{
    return $this->belongsTo(Consulta::class, 'id_receta', 'id_receta');
}
}
