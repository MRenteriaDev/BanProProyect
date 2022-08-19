<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SolicitudVendedor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudVendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes_vendedores = DB::table('solicitud_vendedors')->get();

        return view('admin.solicitudvendedor.index', compact('solicitudes_vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = DB::table('sellers')->get();
        return view("admin.solicitudvendedor.create", compact('sellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required'
        ]);

        SolicitudVendedor::insert([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje,
            'correo' => $request->correo,
            'seller_id' => $request->seller_id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Solicitud enviada a vendedor correctamente',
            'alert-type' => 'success'
        );

        return redirect()->route('solicitudvendedor.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud_vendedor = SolicitudVendedor::findOrFail($id);
        $sellers = DB::table('sellers')->get();
        return view('admin.solicitudvendedor.update', compact("solicitud_vendedor", "sellers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nombre' => 'required'
        ]);

        SolicitudVendedor::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje,
            'correo' => $request->correo,
            'seller_id' => $request->seller_id,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Solicitud se actualizó correctamente',
            'alert-type' => 'success'
        );

        return redirect()->route('solicitudvendedor.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id > 0) {
            SolicitudVendedor::findOrFail($id)->delete();

            $notification = array(
                'message' => "La solicitud de vendedor se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('solicitudvendedor.index')->with($notification);
        }

        $notification = array(
            'message' => "La solicitud de vendedor no existe",
            "alter-type" => "error"
        );

        return redirect()->route('solicitudvendedor.index')->with($notification);
    }
}
