<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Locacion;
use App\Models\Propiedades;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function busqueda(Request $request)
    {

        $uin = $request->get('uin');
        $precio = $request->get('precio');
        $tipo_propiedad = $request->get('tipo_propiedad');
        $colonia = $request->get('colonia');
        $estatus_propiedad = $request->get('estatus_propiedad');
        $aire = $request->get('aire');
        $alberca = $request->get('alberca');
        $balcon = $request->get('balcon');
        $internet = $request->get('internet');
        $cable = $request->get('cable');
        $lavaplatos = $request->get('lavaplatos');
        $estacionamiento = $request->get('estacionamiento');
        $refrigerador = $request->get('refrigerador');



        if ($uin <> null && $colonia <> null && $tipo_propiedad <> null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->where('precio', '<=', $precio)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }


        if ($uin == null && $colonia == null && $tipo_propiedad == null && $precio == null) {
            $propiedades_filtradas = Propiedades::latest()->get();
        }

        if ($uin == null && $colonia <> null && $tipo_propiedad <> null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->where('precio', '<=', $precio)
                ->get();
        }

        if ($uin <> null && $colonia == null && $tipo_propiedad <> null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->where('precio', '<=', $precio)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }

        if ($uin <> null && $colonia <> null && $tipo_propiedad == null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('precio', '<=', $precio)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }

        if ($uin <> null && $colonia <> null && $tipo_propiedad <> null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }

        if ($uin == null && $colonia == null && $tipo_propiedad <> null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->where('precio', '<=', $precio)
                ->get();
        }

        if ($uin == null && $colonia <> null && $tipo_propiedad == null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('precio', '<=', $precio)
                ->get();
        }

        if ($uin == null && $colonia <> null && $tipo_propiedad <> null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->get();
        }

        if ($uin <> null && $colonia == null && $tipo_propiedad == null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('precio', '<=', $precio)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }

        if ($uin <> null && $colonia == null && $tipo_propiedad <> null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }

        if ($uin <> null && $colonia <> null && $tipo_propiedad == null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }


        if ($uin == null && $colonia == null && $tipo_propiedad == null && $precio <> null) {
            $propiedades_filtradas = Propiedades::where('precio', '<=', $precio)
                ->get();
        }

        if ($uin == null && $colonia == null && $tipo_propiedad <> null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('tipo_propiedad_id', '=', $tipo_propiedad)
                ->get();
        }

        if ($uin == null && $colonia <> null && $tipo_propiedad == null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('locacion_id', '=', $colonia)
                ->get();
        }

        if ($uin <> null && $colonia == null && $tipo_propiedad == null && $precio == null) {
            $propiedades_filtradas = Propiedades::where('nombre', 'LIKE', '%' . $uin . '%')
                ->get();
        }




        //  $query = Locacion::where('nombre', 'LIKE', '%' . $uin . '%')->get();
        $Response = ['success' => 'logrado'];

        return view('cliente.properties-grid', compact('propiedades_filtradas'));


        // return response()->json($tipo_propiedad, 200);
    }
}
