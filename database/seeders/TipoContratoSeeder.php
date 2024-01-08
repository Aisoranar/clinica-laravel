<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\TipoContrato;

class TipoContratoSeeder extends Seeder
{
    public function run()
    {
        TipoContrato::create([
            'nombre' => 'Contrato A'
        ]);

        TipoContrato::create([
            'nombre' => 'Contrato B'
        ]);

        TipoContrato::create([
            'nombre' => 'Contrato C'
        ]);

        TipoContrato::create([
            'nombre' => 'Contrato D'
        ]);

        TipoContrato::create([
            'nombre' => 'Contrato E'
        ]);
    }
}
