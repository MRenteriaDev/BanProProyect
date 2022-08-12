<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;
use Database\Factories\TipoPropiedadFactory;

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
    }
}
