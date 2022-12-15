<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locacion;
use App\Models\Propiedades;
use Illuminate\Support\Facades\DB;
use PDF;

class SearchController extends Controller
{
    public function busqueda(Request $request)
    {

        $vuin = $request->get('vuin');
        $vpreciomax = $request->get('vpreciomax');
        $vpreciomin = $request->get('vpreciomin');
        $vtipo_propiedad = $request->get('vtipo_propiedad');
        $vcolonia = $request->get('vcolonia');

        $ruin = $request->get('ruin');
        $rpreciomax = $request->get('rpreciomax');
        $rpreciomin = $request->get('rpreciomin');
        $rtipo_propiedad = $request->get('rtipo_propiedad');
        $rcolonia = $request->get('rcolonia');

        $estatus_propiedad = $request->get('estatus_propiedad');
        $aire = $request->get('aire');
        $alberca = $request->get('alberca');
        $balcon = $request->get('balcon');
        $internet = $request->get('internet');
        $cable = $request->get('cable');
        $lavaplatos = $request->get('lavaplatos');
        $estacionamiento = $request->get('estacionamiento');
        $refrigerador = $request->get('refrigerador');
        $bv = $request->get('bv');
        $br = $request->get('br');




        if ($bv != null) {
            $propiedades_filtradas = Propiedades::where('estatus_propiedad_id', '=', 42)
                ->when(!is_null($vuin), function ($query) use ($request) {
                    $query->where('nombre', 'LIKE', '%' . $request->vuin . '%');
                })
                ->when(!is_null($vcolonia), function ($query) use ($request) {
                    $query->where('locacion_id', '=', $request->vcolonia);
                })
                ->when(!is_null($vpreciomax), function ($query) use ($request) {
                    $query->where('precio', '<=', $request->vpreciomax);
                })
                ->when(!is_null($vpreciomin), function ($query) use ($request) {
                    $query->where('precio', '>=', $request->vpreciomin);
                })
                ->when(!is_null($vtipo_propiedad), function ($query) use ($request) {
                    $query->where('tipo_propiedad_id', '=', $request->vtipo_propiedad);
                })
                ->orderBy('precio', 'asc')

                ->get();
        }
        if ($br != null) {

            $propiedades_filtradas = Propiedades::where('estatus_propiedad_id', '=', 41)
                ->when(!is_null($ruin), function ($query) use ($request) {
                    $query->where('nombre', 'LIKE', '%' . $request->ruin . '%');
                })
                ->when(!is_null($rcolonia), function ($query) use ($request) {
                    $query->where('locacion_id', '=', $request->rcolonia);
                })
                ->when(!is_null($rpreciomax), function ($query) use ($request) {
                    $query->where('precio', '<=', $request->rpreciomax);
                })
                ->when(!is_null($rpreciomin), function ($query) use ($request) {
                    $query->where('precio', '>=', $request->rpreciomin);
                })
                ->when(!is_null($rtipo_propiedad), function ($query) use ($request) {
                    $query->where('tipo_propiedad_id', '=', $request->rtipo_propiedad);
                })
                ->orderBy('precio', 'asc')

                ->get();
        }




        //  $query = Locacion::where('nombre', 'LIKE', '%' . $uin . '%')->get();
        $Response = ['success' => 'logrado'];



        return view('cliente.properties-grid', compact('propiedades_filtradas'));


        // return response()->json($tipo_propiedad, 200);
    }

    public function downloadPdf()
    {
        $casas = Propiedades::orderBy('precio','asc')->get();

        $pdf = PDF::loadView("cliente.clientecasaspdf", compact("casas"));

        return $pdf->download("Listadodecasas.pdf");
    }
}
