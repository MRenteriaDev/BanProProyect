<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Propiedades;
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

        $property = Propiedades::where('id', $id)->get();
        return view('cliente.property', compact("property"));
    }

    public function sellersGrid()
    {
        $sellers = DB::table('sellers')->get();
        return view('cliente.sellers-grid', compact("sellers"));
    }

    public function sellerGrid($id)
    {
        $seller = DB::table('sellers')->where('id', $id)->get();
        return view('cliente.sellers', compact("seller"));
    }

    public function contact()
    {
        return view('cliente.contact');
    }
}
