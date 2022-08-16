<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ZonasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'zona_nombre' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
