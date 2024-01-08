<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nombres', 'apellidos', 'fecha_nacimiento', 'direccion', 'telefono', 'especialidad', 'id_contrato'];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class, 'id_medico');
    }

    public function contrato()
    {
        return $this->belongsTo(TipoContrato::class, 'id_contrato');
    }
}
