<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Locacion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locaciones = DB::table('locacions')->get();

        return view('admin.locacion.index', compact('locaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = DB::table('zonas')->get();
        return view('admin.locacion.create', compact('zonas'));
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
            'nombre' => 'required|unique:locacions,nombre',
            'zona_id' => 'required'
        ]);


        Locacion::insert([
            'nombre' => $request->nombre,
            'zona_id' => $request->zona_id,
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La creacion de locacion fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('locacion.index')->with($notificacion);
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
        $locacion = Locacion::findorFail($id);
        $zonas = DB::table('zonas')->get();

        return view('admin.locacion.update', compact('locacion', 'zonas'));
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
            'nombre' => 'required|unique:locacions,nombre',
            'zona_id' => 'required'
        ]);


        Locacion::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'zona_id' => $request->zona_id,
            'updated_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La actualizacion de locacion fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('locacion.index')->with($notificacion);
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
            Locacion::findOrFail($id)->delete();

            $notification = array(
                'message' => "La locacion se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('locacion.index')->with($notification);
        }

        $notification = array(
            'message' => "La locacion no existe",
            "alter-type" => "error"
        );

        return redirect()->route('locacion.index')->with($notification);
    }
}
