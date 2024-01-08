<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoContrato extends Model
{
    protected $table = 'tipo_contratos';
    protected $fillable = ['nombre'];

    public function medicos()
    {
        return $this->hasMany(Medico::class, 'id_contrato');
    }
}
