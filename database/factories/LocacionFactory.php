<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LocacionFactory extends Factory
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
            'locacion_image' => "https://media.istockphoto.com/id/1203937499/es/foto/carretera-de-la-ciudad-a-trav%C3%A9s-de-edificios-modernos-en-beijing.webp?s=612x612&w=is&k=20&c=ZnkBwPIOoMPvGdYex_rByYbSAYcGX6XfWhqT5edKe18=",
            'zona_id' => rand(1, 15),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
