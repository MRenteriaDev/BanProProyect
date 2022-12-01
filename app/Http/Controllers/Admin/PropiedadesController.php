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
use App\Models\Seller;
use App\Models\SolicitudVendedor;
use App\Models\TipoPropiedad;
use Intervention\Image\ImageManagerStatic as Image;

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
        $reviews = DB::table('reviews')->get();
        $solicitudvendedor = DB::table('solicitud_vendedors')->get();
        $seller = DB::table('sellers')->get();
        return view('admin.propiedades.create', compact('estatuspropiedad', 'locacion', 'tipopropiedades',  'reviews', 'solicitudvendedor', 'seller'));
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
            'precio' => 'required|numeric',
            'estatus_propiedad_id' => 'required',
            'seller_id' => 'required',

        ], [
            'nombre.required' => 'Ingrese un nombre para la publicación de la propiedad',
            'precio.required' => 'Porfavor, ingresa el precio de la propiedad',
            'precio.required' => 'Ingresa números unicamente',
            'estatus_propiedad_id.required' => 'Seleccione un estatus ',
            'locacion_id.required' => 'Se debe seleccionar algo',
            'tipo_propiedad_id.required' => 'Se debe seleccionar algo',
            'planos' => 'Se debe seleccionar algo',
            'nearbys.required' => 'Se debe escribir algo',
            'seller_id.required'=> 'Debe seleccionar un vendedor',

        ]);

        if($request->file('planos') != null){
            $originalImage = $request->file('planos');
            $originalImageMove = $data['nombre'] . '-documento-' . time() . rand(1, 1000) . '.' . $originalImage->extension();
            $imageSave = $originalImage->move(public_path('planos_documentos'), $originalImageMove);
        }else{
            $originalImageMove = null;
        }

        Propiedades::insert([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'tamano_propiedad' => $request->tamano_propiedad,
            'tamano_propiedad_construido' => $request->tamano_propiedad_construido,
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
            'solicitud_vendedor_id' => $request->solicitud_vendedor_id,
            'review_id' => $request->review_id,
            'estatus_propiedad_id' => $request->estatus_propiedad_id,
            'locacion_id' => $request->locacion_id,
            'tipo_propiedad_id' => $request->tipo_propiedad_id,
            'planos' => $originalImageMove,
            'nearbys' => $request->nearbys,
            'descripcion' => $request->descripcion,
            'seller_id' => $request->seller_id,
            'ubicacion' => $request->ubicacion,
            'created_at' => Carbon::now()
        ]);



        // $new_propiedad = Propiedades::create($data);
        $last = Propiedades::latest()->take(1)->get();

        if ($request->has('nombre_archivo')) {
            foreach ($request->file('nombre_archivo') as $documento) {
                $documento_nname = $data['nombre'] . '-documento-' . time() . rand(1, 1000) . '.' . $documento->extension();
                $thumbnail = "resized-". $documento_nname;
                $file = public_path('propiedades_documentos') . $documento_nname;
                $ruta = public_path('propiedades_documentos/thumb/') . $thumbnail;
                Image::make($documento)->resize(345,280)->save($ruta);
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
            $reviews = Reviews::latest()->get();
            $solicitudvendedor = SolicitudVendedor::latest()->get();
            $seller = Seller::latest()->get();
            $galeria_priopiedad = GaleriaPropiedades::where('propiedad_id', $propiedades->id)->get();
            return view('admin.propiedades.update', compact("propiedades", "estatuspropiedad", "locacion", "tipopropiedades",  "reviews", "solicitudvendedor", "galeria_priopiedad", "seller"));
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

        if ($request->has('nombre_archivo')) {
            foreach ($request->file('nombre_archivo') as $documento) {
                $documento_nname = $request['nombre'] . '-documento-' . time() . rand(1, 1000) . '.' . $documento->extension();
                $thumbnail = "resized-". $documento_nname;
                $file = public_path('propiedades_documentos') . $documento_nname;
                $ruta = public_path('propiedades_documentos/thumb/') . $thumbnail;
                Image::make($documento)->resize(345,280)->save($ruta);
                $documento->move(public_path('propiedades_documentos'), $documento_nname);


                GaleriaPropiedades::create([
                    'propiedad_id' => $id,
                    'nombre_archivo' => $documento_nname,
                    'created_at' => Carbon::now()
                ]);
            }
        }


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
