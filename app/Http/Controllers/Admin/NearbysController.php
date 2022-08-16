<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nearbys;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NearbysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nearbys = DB::table('nearbys')->get();

        return view('admin.nearbys.index', compact('nearbys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nearbys.create');
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
            'nombre' => 'required',
            'distancia_km' => 'required'
        ]);

        Nearbys::insert([
            'nombre' => $request->nombre,
            'distancia_km' => $request->distancia_km,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "El nearby se agregó correctamente",
            'alert-type' => 'sucess'
        );

        return redirect()->route('nearby.index')->with($notification);
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
        $nearby = Nearbys::findOrFail($id);

        return view('admin.nearbys.update', compact('nearby'));
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
            'nombre' => 'required',
            'distancia_km' => 'required'
        ]);

        Nearbys::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'distancia_km' => $request->distancia_km,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "El nearby se actualizó correctamente",
            'alert-type' => 'sucess'
        );

        return redirect()->route('nearby.index')->with($notification);
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
            Nearbys::findOrFail($id)->delete();

            $notification = array(
                'message' => "El nearby se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('nearby.index')->with($notification);
        }

        $notification = array(
            'message' => "El nearby no existe",
            "alter-type" => "error"
        );

        return redirect()->route('nearby.index')->with($notification);
    }
}
