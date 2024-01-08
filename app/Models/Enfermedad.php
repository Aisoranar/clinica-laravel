<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $table = 'enfermedades';

    protected $fillable = ['nombre', 'afecta', 'descripcion'];

    public function historiales()
    {
        return $this->hasMany(Historial::class, 'id_enfermedad');
    }
}
