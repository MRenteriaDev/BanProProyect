<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Propiedades;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propiedades = DB::table('propiedades')->get();

        return view('admin.propiedades.index', compact('propiedades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estatuspropiedad = DB::table('estatus_propiedads')->get();
        $locacion = DB::table('locacions')->get();
        $tipopropiedades = DB::table('tipo_propiedads')->get();
        $nearbys = DB::table('nearbys')->get();
        $reviews = DB::table('reviews')->get();
        $solicitudvendedor = DB::table('solicitud_vendedors')->get();
        return view('admin.propiedades.create', compact('estatuspropiedad', 'locacion', 'tipopropiedades', 'nearbys', 'reviews', 'solicitudvendedor' ));
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
            'precio' => 'required',
            'tamano_propiedad' => 'required',
            'tamano_propiedad_construido' => 'required',
            'fecha_construccion' => 'required',
            'recamaras' => 'required',
            'bano' => 'required',
            'aire_condicionado' => 'required',
            'balcon' => 'required',
            'internet' => 'required',
            'cable' => 'required',
            'alberca' => 'required',
            'lavaplatos' => 'required',
            'estacionamiento' => 'required',
            'refrigerador' => 'required',
            'planos' => 'required',
            'video_propiedad' => 'required',
        ]);


        Propiedades::insert([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'tamano_propiedad' => $request->tamano_propiedad,
            'tamano_propiedad_construido' => $request->tamano_propiedad_construido,
            'fecha_construccion' => $request->fecha_construccion,
            'recamaras' => $request->recamaras,
            'bano' => $request->bano,
            'aire_condicionado' => true,
            'balcon' => true,
            'internet' => false,
            'cable' => false,
            'alberca' => true,
            'lavaplatos' => true,
            'estacionamiento' => true,
            'refrigerador' => true,
            'planos' => $request->planos,
            'video_propiedad' => $request->video_propiedad,
<<<<<<< HEAD
            'nearby_id' => $request->nearby_id,
            'solicitud_vendedor_id' => $request->solicitud_vendedor_id,
            'review_id' => $request->review_id,
            'estatus_propiedad_id' => $request->estatus_propiedad_id,
            'locacion_id' => $request->locacion_id,
            'tipo_propiedad_id' => $request->tipo_propiedad_id,
=======
>>>>>>> faac6379f716feac1b2e02729bcd46a2dd3e6a24
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La alta de propiedades fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('propiedades.index')->with($notificacion);
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
        $propiedades = Propiedades::findOrFail($id);
        return view('admin.propiedades.update', compact('propiedades'));
    }

    $notification = array(
        'message' => "La propiedad no existe",
        "alter-type" => "error"
    );
    return redirect()->route('propiedades.index')->with($notification);
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
            'precio' => 'required',
            'tamano_propiedad' => 'required',
            'tamano_propiedad_construido' => 'required',
            'fecha_construccion' => 'required',
            'recamaras' => 'required',
            'bano' => 'required',
            'aire_condicionado' => 'required',
            'balcon' => 'required',
            'internet' => 'required',
            'cable' => 'required',
            'alberca' => 'required',
            'lavaplatos' => 'required',
            'estacionamiento' => 'required',
            'refrigerador' => 'required',
            'planos' => 'required',
            'video_propiedad' => 'required',
            'nearby_id' => 'required',
            'solicitud_vendedor_id' => 'required',
            'review_id' => 'required',
            'estatus_propiedad_id' => 'required',
            'locacion_id' => 'required',
            'tipo_propiedad_id' => 'required',
        ]);

        Propiedades::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'tamano_propiedad' => $request->tamano_propiedad,
            'tamano_propiedad_construido' => $request->tamano_propiedad_construido,
            'fecha_construccion' => $request->fecha_construccion,
            'recamaras' => $request->recamaras,
            'bano' => $request->bano,
            'aire_condicionado' => $request->aire_condicionado,
            'balcon' => $request->balcon,
            'internet' => $request->internet,
            'cable' => $request->cable,
            'alberca' => $request->alberca,
            'lavaplatos' => $request->lavaplatos,
            'estacionamiento' => $request->estacionamiento,
            'refrigerador' => $request->refrigerador,
            'planos' => $request->planos,
            'video_propiedad' => $request->video_propiedad,
            'nearby_id' => $request->nearby_id,
            'solicitud_vendedor_id' => $request->solicitud_vendedor_id,
            'review_id' => $request->review_id,
            'estatus_propiedad_id' => $request->estatus_propiedad_id,
            'locacion_id' => $request->locacion_id,
            'tipo_propiedad_id' => $request->tipo_propiedad_id,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => "La propiedad se actualizó correctamente",
            'alert-type' => 'sucess'
        );

        return redirect()->route('propiedades.index')->with($notification);
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
            Propiedades::findOrFail($id)->delete();

            $notification = array(
                'message' => "La propiedad se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('propiedades.index')->with($notification);
        }

        $notification = array(
            'message' => "La propiedad no existe",
            "alter-type" => "error"
        );

        return redirect()->route('propiedades.index')->with($notification);
    }
}
