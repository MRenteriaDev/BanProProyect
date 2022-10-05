<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EstatusPropiedad;
use App\Models\GaleriaPropiedades;
use App\Models\Locacion;
use App\Models\Nearbys;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Propiedades;
use App\Models\Reviews;
use App\Models\SolicitudVendedor;
use App\Models\TipoPropiedad;
use Image;

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
        return view('admin.propiedades.create', compact('estatuspropiedad', 'locacion', 'tipopropiedades', 'nearbys', 'reviews', 'solicitudvendedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'precio' => 'required',

        ], [
            'nearby_id.required' => 'Se debe seleccionar algo',
            'solicitud_vendedor_id.required' => 'Se debe seleccionar algo',
            'review_id.required' => 'Se debe seleccionar algo',
            'estatus_propiedad_id.required' => 'Se debe seleccionar algo',
            'locacion_id.required' => 'Se debe seleccionar algo',
            'tipo_propiedad_id.required' => 'Se debe seleccionar algo',

        ]);

        $originalImage = $request->file('planos');
        $originalImageMove = $data['nombre'] . '-documento-' . time() . rand(1, 1000) . '.' . $originalImage->extension();
        $imageSave = $originalImage->move(public_path('planos_documentos'), $originalImageMove);


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
            'nearby_id' => $request->nearby_id,
            'solicitud_vendedor_id' => $request->solicitud_vendedor_id,
            'review_id' => $request->review_id,
            'estatus_propiedad_id' => $request->estatus_propiedad_id,
            'locacion_id' => $request->locacion_id,
            'tipo_propiedad_id' => $request->tipo_propiedad_id,
            'planos' => $originalImageMove,
            'created_at' => Carbon::now()
        ]);



        // $new_propiedad = Propiedades::create($data);
        $last = Propiedades::latest()->take(1)->get();

        if ($request->has('nombre_archivo')) {
            foreach ($request->file('nombre_archivo') as $documento) {
                $documento_nname = $data['nombre'] . '-documento-' . time() . rand(1, 1000) . '.' . $documento->extension();
                $documento->move(public_path('propiedades_documentos'), $documento_nname);
                GaleriaPropiedades::create([
                    'propiedad_id' => $last[0]->id,
                    'nombre_archivo' => $documento_nname,
                    'created_at' => Carbon::now()
                ]);
            }
        }




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
            $estatuspropiedad = EstatusPropiedad::latest()->get();
            $locacion = Locacion::latest()->get();
            $tipopropiedades = TipoPropiedad::latest()->get();
            $nearbys = Nearbys::latest()->get();
            $reviews = Reviews::latest()->get();
            $solicitudvendedor = SolicitudVendedor::latest()->get();
            $galeria_priopiedad = GaleriaPropiedades::where('propiedad_id', $propiedades->id)->get();
            return view('admin.propiedades.update', compact("propiedades", "estatuspropiedad", "locacion", "tipopropiedades", "nearbys", "reviews", "solicitudvendedor", "galeria_priopiedad"));
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

        ], [
            'nombre.required' => 'El nombre de la zona es requerido',

        ]);

        Propiedades::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'updated_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "La propiedad se actualizó Correctamente",
            'alert-type' => "success",
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
