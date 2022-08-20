<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EstatusPropiedad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstatusPropiedadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estatus_propiedades = DB::table('estatus_propiedads')->get();

        return view('admin.statuspropiedad.index', compact('estatus_propiedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statuspropiedad.create');
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

        ], [
            'nombre.required' => 'El nombre del estatus es requerido',

        ]);

        EstatusPropiedad::insert([
            'nombre' => $request->nombre,
            'created_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "El estatus se agregó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('statuspropiedad.index')->with($notification);
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
        if ($id > 0) {
            $estatus_propied = EstatusPropiedad::findOrFail($id);
            return view('admin.statuspropiedad.update', compact("estatus_propied"));
        }

        $notification = array(
            'message' => "El estatus no existe",
            "alter-type" => "error"
        );

        return redirect()->route('statuspropiedad.index')->with($notification);
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

        ], [
            'nombre.required' => 'El nombre del estatus es requerido',

        ]);

        EstatusPropiedad::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'updated_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "El estatus de propiead se actualizó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('statuspropiedad.index')->with($notification);
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
            EstatusPropiedad::findOrFail($id)->delete();

            $notification = array(
                'message' => "La zona se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('statuspropiedad.index')->with($notification);
        }

        $notification = array(
            'message' => "La zona no existe",
            "alter-type" => "error"
        );

        return redirect()->route('statuspropiedad.index')->with($notification);
    }
}
