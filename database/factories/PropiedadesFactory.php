<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PropiedadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => Str::random(10),
            'estatus_propiedad_id' => rand(1, 20),
            'locacion_id' => rand(1, 20),
            'tipo_propiedad_id' => rand(1, 20),
            'precio' => rand(120000, 50000),
            'tamano_propiedad_construido' => rand(56, 180),
            'descripcion' => Str::random(100),
            'fecha_construccion' => Carbon::now(),
            'recamaras' => rand(2, 12),
            'bano' => rand(1, 4),
            'aire_condicionado' => true,
            'balcon' => true,
            'cable' => true,
            'internet' => true,
            'alberca' => true,
            'lavaplatos' => true,
            'estacionamiento' => true,
            'refrigerador' => true,
            'planos' => Str::random(100),
            'nearby_id' => rand(1, 20),
            'video_propiedad' => Str::random(100),
            'review_id' => rand(1, 20),
            'solicitud_vendedor_id' => rand(1, 20)
        ];
    }
}
