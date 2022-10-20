<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use App\Models\Propiedades;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Location;

class IndexController extends Controller
{
    public function propertiesGrid()
    {
        $properties = DB::table('propiedades')->get();
        return view('cliente.properties-grid', compact("properties"));
    }

    public function propertyGrid($id)
    {

        $property = Propiedades::where('id', $id)->get();
        $propertyName = Propiedades::where('id', $id)->select('nombre')->get();
        $share_buttons = \Share::page(
            'http://127.0.0.1:8000/properties/grid/' . $id,
            "Propiedad {$property[0]->nombre}"
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->reddit();
        return view('cliente.property', compact("property", "share_buttons"));
    }


    public function sellersGrid()
    {
        $sellers = DB::table('sellers')->get();
        return view('cliente.sellers-grid', compact("sellers"));
    }

    public function sellerGrid($id)
    {
        $seller = DB::table('sellers')->where('id', $id)->get();
        return view('cliente.sellers', compact("seller"));
    }

    public function contact()
    {
        return view('cliente.contact');
    }

    public function contactStore(Request $request)
    {

        $request->validate([
           'nombre' => 'required',
           'apellido' => 'required',
           'correo' => 'required',
           'mensaje' => 'required',

       ], [
           'nombre.required' => 'El nombre es requerido',
           'apellido.required' => 'El apellido es requerido',
           'correo.required' => 'El correo es requerido',
           'mensaje.required' => 'El mensaje es requerido',

       ]);

       Contacto::insert([
        'nombre' => $request->nombre,
        'apellido' => $request->apellido,
        'correo' => $request->correo,
        'mensaje' => $request->mensaje,
        'created_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "La información se envio correctamente",
            'alert-type' => "success",
        );

       return redirect()->back()->with($notification);
    }


}
