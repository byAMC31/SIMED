<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    // Si el nombre de la tabla no es el plural del nombre de la clase en inglés, 
    // necesitas definir la propiedad $table con el nombre de la tabla
    protected $table = 'medico';

    // Si los timestamps (created_at y updated_at) no son necesarios en tu tabla, 
    // añade la siguiente línea
    public $timestamps = false;

    protected $fillable = ['nombreMe', 'appMe', 'apmMe', 'sexoMe', 'nTelMe', 'nssMe'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }
    public function justificantes()
    {
        return $this->hasMany(Justificante::class, 'id_medico','id');
    }

    public function consulta(){
        return $this->hasMany(Consulta::class, 'id_medico','id');
    }
}
