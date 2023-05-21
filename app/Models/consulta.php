<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $table = 'consulta';

    protected $primaryKey = 'id_consulta';

    protected $fillable = [
        'fechaCo', 
        'horaCo', 
        'motivoCo',
        'observacionesCo',
        'diagnosticoCo',
        'id_medico',
        'id_expediente',
        'idExamenF',
        'id_receta',
    ];

    protected $dates = [
        'fechaCo',
    ];

    public function medico(){
        return $this->belongsTo(Medico::class, 'id_medico');
    }

    public function expediente(){
        return $this->belongsTo(Expediente::class, 'id_expediente');
    }

    public function examenFisico(){
        return $this->belongsTo(ExamenFisico::class, 'idExamenF');
    }

    public function receta(){
        return $this->belongsTo(Receta::class, 'id_receta');
    }
}
