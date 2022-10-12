<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locacion;

class SearchController extends Controller
{
    public function busqueda(Request $request){

        // $term = $request->get('term');
        // $tipop = $request->get('tipo_propiedad');

        // $query = Locacion::where('nombre', 'LIKE', '%' . $term . '%')->get();

        // $data = [];
        // foreach($query as $q){
        //     $data[] = [
        //         'label' => $q->nombre,
        //         'tipo' => $q->tipo_propiedad
        //     ];
        // }
        // return view('cliente.properties-grid', compact('query'));
    }
}
