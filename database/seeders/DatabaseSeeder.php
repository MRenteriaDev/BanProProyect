<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;
use Database\Factories\TipoPropiedadFactory;
use Database\Factories\ZonaFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          \App\Models\Seller::factory(2)->create();
          \App\Models\Seller::factory(2)->create();
          \App\Models\TipoPropiedad::factory(10)->create();
          \App\Models\Zonas::factory(20)->create();
          \App\Models\Locacion::factory(20)->create();
    }
}
