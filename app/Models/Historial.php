<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    protected $table = 'historiales'; 

    protected $fillable = ['paciente_id', 'enfermedad_id'];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }

    public function enfermedad()
    {
        return $this->belongsTo(Enfermedad::class, 'enfermedad_id');
    }
}
