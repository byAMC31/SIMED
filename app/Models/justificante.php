<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificante extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_justificante';

    protected $table = 'justificante';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'emisorJu',
        'diagnosticoJu',
        'fechaJu',
        'id_usuario',
        'id_medico',
    ];

    /**
     * Get the user that owns the Justificante.
     */
    public function user()
    {
        return $this->belongsTo(Estudiante::class, 'id', 'id');
    }

    /**
     * Get the medico that owns the Justificante.
     */
    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico','id_medico');
    }




}
