<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zonas;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ZonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonas = DB::table('zonas')->get();
        return view('admin.zonas.index', compact('zonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.zonas.create');
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
            'nombre.required' => 'El nombre de la zona es requerido',

        ]);

        Zonas::insert([
            'nombre' => $request->nombre,
            'created_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "La zona se agregó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('zonas.index')->with($notification);
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
            $zona = Zonas::findOrFail($id);
            return view('admin.zonas.update', compact("zona"));
        }

        $notification = array(
            'message' => "La zona no existe",
            "alter-type" => "error"
        );

        return redirect()->route('zonas.index')->with($notification);
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
            'nombre.required' => 'El nombre de la zona es requerido',

        ]);

        Zonas::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'updated_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "La zona se actualizó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('zonas.index')->with($notification);
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
            Zonas::findOrFail($id)->delete();

            $notification = array(
                'message' => "La zona se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('zonas.index')->with($notification);
        }

        $notification = array(
            'message' => "La zona no existe",
            "alter-type" => "error"
        );

        return redirect()->route('zonas.index')->with($notification);
    }
}
