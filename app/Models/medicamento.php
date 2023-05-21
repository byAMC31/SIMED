<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;

    protected $table = 'medicamento';

    protected $primaryKey = 'id_medicamento';

    protected $fillable = [
        'nombreMe', 
        'descripcionMe', 
        'precio', 
        'stock',
        'dosisMe',
        'fechaCaducidad',
    ];

    protected $dates = [
        'fechaCaducidad',
    ];

    public function medicamentosRecetados(){
        return $this->hasMany(MedicamentosRecetados::class, 'id_medicamento');
    }
}


