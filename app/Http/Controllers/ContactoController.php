<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Contacto;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = DB::table('contactos')->get();
        return view('admin.contactos.index', compact('contactos'));
    }

    public function destroy($id)
    {
        if ($id > 0) {
            Contacto::findOrFail($id)->delete();

            $notification = array(
                'message' => "El contacto se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('contact.index')->with($notification);
        }

        $notification = array(
            'message' => "El contacto no existe",
            "alter-type" => "error"
        );

        return redirect()->route('contact.index')->with($notification);
    }


}
