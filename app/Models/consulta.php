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
        //'id_medico',
        //'id_expediente',
       // 'idExamenF',
       // 'id_receta',
    ];

    protected $dates = [
        'fechaCo',
    ];

    public function medico(){
        return $this->belongsTo(Medico::class, 'id_medico','id');
    }

    public function expediente(){
        return $this->belongsTo(expediente::class, 'id_expediente','id_expediente');
    }

    public function examenFisico(){
        return $this->belongsTo(examenFisico::class, 'idExamenF','idExamenF');
    }

    public function receta(){
        return $this->belongsTo(Receta::class, 'id_receta','id_receta');
    }
}
