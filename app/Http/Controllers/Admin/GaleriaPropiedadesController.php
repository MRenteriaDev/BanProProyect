<?php

namespace App\Http\Controllers\Admin;
use App\Models\GaleriaPropiedades;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class GaleriaPropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeriapropiedades = DB::table('galeria_propiedades')->get();

        return view('admin.galeriapropiedades.index', compact('galeriapropiedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeriapropiedades.create');
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
            'nombre_archivo' => 'required',
        ]);


        GaleriaPropiedades::insert([
            'nombre_archivo' => $request->nombre_archivo,
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La alta de la propiedad de galeria fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('galeriapropiedad.index')->with($notificacion);
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
        $galeriapropiedades = GaleriaPropiedades::findorFail($id);


        return view('admin.galeriapropiedades.update', compact('galeriapropiedades'));
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
            'nombre_archivo' => 'required',
        ]);


        GaleriaPropiedades::findOrFail($id)->insert([
            'nombre_archivo' => $request->nombre_archivo,
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La actualizacion de la galeria fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('galeriapropiedad.index')->with($notificacion);
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
            GaleriaPropiedades::findOrFail($id)->delete();

            $notification = array(
                'message' => "La propiedad de la galeria se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('galeriapropiedad.index')->with($notification);
        }

        $notification = array(
            'message' => "La propiedad de la galeria no existe",
            "alter-type" => "error"
        );

        return redirect()->route('galeriapropiedad.index')->with($notification);
    }
}
