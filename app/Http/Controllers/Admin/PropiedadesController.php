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
        $propiedades = Propiedades::latest()->get();

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

        $obj = (object) $request->returnArr;
        $data = $obj;

        $imgs_array = explode(',', $request->imgs);

        Propiedades::insert([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'tamano_propiedad' => $request->tamano_propiedad,
            'tamano_propiedad_construido' => $request->tamano_propiedad_construido,
            'recamaras' => $request->recamaras,
            'bano' => $request->bano,
            'estatus_propiedad_id' => $request->estatus_propiedad_id,
            'locacion_id' => $request->locacion_id,
            'tipo_propiedad_id' => $request->tipo_propiedad_id,
            'nearbys' => $request->nearbys,
            'descripcion' => $request->descripcion,
            'seller_id' => $request->seller_id,
            'ubicacion' => $request->ubicacion,
            'created_at' => Carbon::now()
        ]);



        // $new_propiedad = Propiedades::create($data);
        $last = Propiedades::latest()->take(1)->get();
        $index = 0;

        if ($request->has('nombre_archivo')) {

            foreach ($request->file('nombre_archivo') as $documento) {

                $f1 = 0;
                $documento_nname = $request->nombre . '-documento-' . time() . rand(1, 1000) . '.' . $documento->extension();
                $thumbnail = "resized-" . $documento_nname;
                $file = public_path('propiedades_documentos') . $documento_nname;
                $ruta = public_path('propiedades_documentos/thumb/') . $thumbnail;
                Image::make($documento)->resize(345, 280)->save($ruta);
                $documento->move(public_path('propiedades_documentos'), $documento_nname);

                $nombre_original = $documento->getClientOriginalName();


                for ($index_imgs = 0; $index_imgs < count($imgs_array); $index_imgs++) {
                    if ($nombre_original == $imgs_array[$index_imgs]){
                        $current_position = $index_imgs;


                    }

                }

                GaleriaPropiedades::create([
                    'propiedad_id' => $last[0]->id,
                    'nombre_archivo' => $documento_nname,
                    'position' => $current_position,
                    'created_at' => Carbon::now()
                ]);


            }
        }
        return response()->json([
                     'redirect' => url('/propiedades/index')
                 ]);



        // if ($f1 == 1) {
        //     $request = request();
        //     $index = 1;
        //     $datos = $request['datos'];

        //     if (count($datos)) {
        //         for ($i = 0; $i < count($datos); $i++) {
        //             $sport = GaleriaPropiedades::find($datos[$i]);
        //             if ($index <= count($datos)) {
        //                 $sport->position = $index;
        //                 $sport->save();
        //             }
        //             $index++;
        //         }
        //     }
        //     return response()->json([
        //         'redirect' => url('/propiedades/index')
        //     ]);
        // }


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
            $galeria_propiedad  = GaleriaPropiedades::where('propiedad_id', $propiedades->id)->get();
            return view('admin.propiedades.update', compact("propiedades", "estatuspropiedad", "locacion", "tipopropiedades",  "reviews", "solicitudvendedor", "galeria_propiedad", "seller"));
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
            'nearbys' => $request->nearbys,
            'descripcion' => $request->descripcion,
            'seller_id' => $request->seller_id,
            'ubicacion' => $request->ubicacion,
            'updated_at' => Carbon::now()
        ]);

        if ($request->has('nombre_archivo')) {
            foreach ($request->file('nombre_archivo') as $documento) {
                $documento_nname = $request['nombre'] . '-documento-' . time() . rand(1, 1000) . '.' . $documento->extension();
                $thumbnail = "resized-" . $documento_nname;
                $file = public_path('propiedades_documentos') . $documento_nname;
                $ruta = public_path('propiedades_documentos/thumb/') . $thumbnail;
                Image::make($documento)->resize(345, 280)->save($ruta);
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

    public function reorder(Request $request)
    {
        $request = request();

        $index = 0;
        $data = $request['data'];
        if (count($data)) {
            for ($i = 0; $i < count($data); $i++) {
                $sport = GaleriaPropiedades::find($data[$i]);
                if ($index <= count($data)) {
                    $sport->position = $index;
                    $sport->save();
                }
                $index++;
            }
        }
        return response()->json([
            'redirect' => url('/propiedades/index')
        ]);
    }
}
