<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicamentosRecetados extends Model
{
    use HasFactory;

    protected $table = 'MedicamentosRecetados';

    protected $fillable = [
        'id_receta',
        'id_medicamento',
    ];

    public function receta(){
        return $this->belongsTo(Receta::class, 'id_receta','id_receta');
    }

    public function medicamento(){
        return $this->belongsTo(Medicamento::class, 'id_medicamento','id_medicamento');
    }
}
