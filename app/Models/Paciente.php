<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombres', 'apellidos', 'fecha_nacimiento', 'direccion', 'telefono', 'id_medico'];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'id_medico');
    }

    public function historiales()
    {
        return $this->hasMany(Historial::class, 'id_paciente');
    }
}
