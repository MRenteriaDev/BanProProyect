<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;
use App\Exports\Propiedadesexport;
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
}
