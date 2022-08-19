<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Location;

class IndexController extends Controller
{
    public function propertiesGrid()
    {
        $properties = DB::table('propiedades')->get();
        return view('cliente.properties-grid', compact("properties"));
    }

    public function propertyGrid($id)
    {
        $property = DB::table('propiedades')->where('id', $id)->get();
        return view('cliente.property', compact("property"));
    }
}
