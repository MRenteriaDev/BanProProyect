<?php

namespace Database\Seeders;

use App\Models\TipoPropiedad;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TipoPropiedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tipo_propiedads')->insert([
        //     'nombre' => Str::random(10),
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // TipoPropiedad::factory()
        // ->count(50)
        // ->create();
    }
}
