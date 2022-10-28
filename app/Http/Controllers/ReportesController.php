<?php

namespace App\Http\Controllers;

use App\Exports\PropiedadesByPrice;
use App\Exports\PropiedadesBySeller;
use App\Models\Propiedades;
use Illuminate\Http\Request;
use App\Exports\Propiedadesexport;
use App\Exports\PropiedadesExportBySeller;
use App\Exports\PropiedadesExportByTipo;
use App\Models\SellersExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportesController extends Controller
{
    public function index()
    {
        return view('admin.reportes.index');
    }

    public function getpropertiesbydates(Request $request)
    {
        // $propiedades = Propiedades::whereBetween("created_at", [$request->fechainicio, $request->fechafinal])->get();
        $from_date = $request->fechainicio;
        $to_date = $request->fechafinal;
        return Excel::download(new Propiedadesexport($from_date, $to_date), 'Propiedades.xlsx');
    }

    public function getpropertiesbytipe(Request $request)
    {
        $tipoPropiedad = $request->tipo_propiedad_id;
        return Excel::download(new PropiedadesExportByTipo($tipoPropiedad), 'PropiedadesTipo.xlsx');
    }

    public function getSellers(Request $request)
    {
        $from_date = $request->fechainicio;
        $to_date = $request->fechafinal;
        return Excel::download(new SellersExport($from_date, $to_date), 'Seller.xlsx');
    }

    public function getpropertiesbyseller(Request $request)
    {
        $seller = $request->seller_id;
        return Excel::download(new PropiedadesBySeller($seller), 'SellerPropiedades.xlsx');
    }

    public function getpropertiesbyprice(Request $request)
    {
        $from_precio = $request->precioinicial;
        $to_precio = $request->preciofinal;
        return Excel::download(new PropiedadesByPrice($from_precio, $to_precio), 'PricePropiedades.xlsx');
    }


}
