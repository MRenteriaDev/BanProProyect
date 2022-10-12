<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locacion;

class SearchController extends Controller
{
    public function locacion(Request $request){
        $term = $request->get('term');

        $query = Locacion::where('nombre', 'LIKE', '%' . $term . '%')->get();

        $data = [];
        foreach($query as $q){
            $data[] = [
                'label' => $q->nombre
            ];
        }
        return($data);
    }
}
