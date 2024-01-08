<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Historial;

class HistorialSeeder extends Seeder
{
    public function run()
    {
        Historial::create([
            'paciente_id' => 1,
            'enfermedad_id' => 1
        ]);

        Historial::create([
            'paciente_id' => 2,
            'enfermedad_id' => 2
        ]);

        Historial::create([
            'paciente_id' => 3,
            'enfermedad_id' => 3
        ]);

        Historial::create([
            'paciente_id' => 4,
            'enfermedad_id' => 4
        ]);

        Historial::create([
            'paciente_id' => 5,
            'enfermedad_id' => 5
        ]);
    }
}
