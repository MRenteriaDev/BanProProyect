<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locacion;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function busqueda($tipo_prpiedad){

        $propiedades = DB::table('propiedades')->where('tipo_propiedad_id', $tipo_prpiedad)->get();

        dd($propiedades);
        die();
    }
}
