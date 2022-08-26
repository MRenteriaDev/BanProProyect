<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MetodosPagos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetodosPagosController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metodospagos = DB::table('metodos_pagos')->get();

        return view('admin.metodospagos.index', compact('metodospagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seller = DB::table('sellers')->get();
        return view('admin.metodospagos.create', compact('seller'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'nombre' => 'required',
            'numero_tarjeta' => 'required',
            'fecha_vencimiento' => 'required',
            'nip' => 'required',
            'seller_id' => 'required'
        ]);


        MetodosPagos::insert([
            'nombre' => $request->nombre,
            'numero_tarjeta' => $request->numero_tarjeta,
            'fecha_vencimiento' => $request->fecha_vencimiento,
            'nip' => $request->nip,
            'seller_id' => $request->seller_id,
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "El metodo de pago fue creado exitosamente",
            'alert-type' => 'success'
        );

        return redirect()->route('metodospagos.index')->with($notificacion);
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
        $metodospagos = MetodosPagos::findorFail($id);
        $sellers = DB::table('sellers')->get();

        return view('admin.metodospagos.update', compact('metodospagos', 'sellers'));
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
        $request->validate([
            'nombre' => 'required',
            'numero_tarjeta' => 'required',
            'fecha_vencimiento' => 'required',
            'nip' => 'required',
            'seller_id' => 'required'
        ]);


        MetodosPagos::findOrFail($id)->insert([
            'nombre' => $request->nombre,
            'numero_tarjeta' => $request->numero_tarjeta,
            'fecha_vencimiento' => $request->fecha_vencimiento,
            'nip' => $request->nip,
            'seller_id' => $request->seller_id,
            'updated_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La actualizacion del metodo de pago fue exitoso",
            'alert-type' => 'success'
        );

        return redirect()->route('metodospagos.index')->with($notificacion);
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
            MetodosPagos::findOrFail($id)->delete();

            $notification = array(
                'message' => "El metodo de pago se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('metodospagos.index')->with($notification);
        }

        $notification = array(
            'message' => "El metodo de pago no existe",
            "alter-type" => "error"
        );

        return redirect()->route('metodospagos.index')->with($notification);
    }

}
