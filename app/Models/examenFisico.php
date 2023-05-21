<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class examenFisico extends Model
{
    use HasFactory;

    protected $table = 'examenFisico';

    protected $primaryKey = 'idExamenF';

    protected $fillable = [
        'presionArterialEf', 
        'temperaturaEf', 
        'pulsoEf',
        'pesoEf',
        'estaturaEf',
        'evaluacionVisualEf',
        'palpacionEf',
        'auscultacionEf',
        'evaluacionNeurologicaEf',
        'evaluacionRespiratoriaEf',
        'evaluacionSensorialEf',
    ];

    public function consulta(){
        return $this->hasMany(Consulta::class, 'idExamenF','idExamenF');
    }

}



