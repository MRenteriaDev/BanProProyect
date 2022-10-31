<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    public function index()
    {
        $imagenes = DB::table('banners')->get();
        return view('admin.banner.index', compact('imagenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
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
            'nombre_archivo' => 'required',

        ], [
            'nombre_archivo.required' => 'Seleccoina un archivo',
        ]);


        if ($request->has('nombre_archivo')) {
            foreach ($request->file('nombre_archivo') as $documento) {
                $documento_nname =  time() . "-". $documento->getClientOriginalName();
                $thumbnail = "resized-". $documento_nname;
                $file = public_path('cliente/images/banner/') . $documento_nname;
                $ruta = public_path('cliente/images/banner/thumb/') . $thumbnail;
                Image::make($documento)->resize(500,280)->save($ruta);
                $documento->move(public_path('cliente/images/banner/'), $documento_nname);
                banner::insert([
                    'nombre_archivo' => $documento_nname,
                    'created_at' => Carbon::now()
                ]);
            }
        }



        $notification  = array(
            'message' => "El banner se agregó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('banner.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id > 0) {
            banner::findOrFail($id)->delete();

            $notification = array(
                'message' => "La zona se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('banner.index')->with($notification);
        }

        $notification = array(
            'message' => "La zona no existe",
            "alter-type" => "error"
        );

        return redirect()->route('banner.index')->with($notification);
    }
}
