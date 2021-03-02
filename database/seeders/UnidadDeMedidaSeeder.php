<?php

namespace Database\Seeders;

use App\Models\UnidadDeMedida;
use Illuminate\Database\Seeder;

class UnidadDeMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $unidades = [
            ['H87', 'Pieza', 'Múltiplos/Fracciones/Decimales'],
            ['E48', 'Unidad de servicio', 'Unidades específicas de la industria (varias)'],
            ['EA', 'Elemento', 'Unidades de venta'],
            ['KGM', 'Kilogramo', 'Mecánica'],
        ];

        foreach($unidades as $unidad){
            UnidadDeMedida::create([
                'clave' => $unidad[0],
                'nombre' => $unidad[1],
                'tipo' => $unidad[2],
                'creado_por' => 0,
                'actualizado_por' => 0
            ]);
        }
    }
}
