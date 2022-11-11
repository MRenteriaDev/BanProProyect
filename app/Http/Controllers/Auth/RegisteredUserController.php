<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\EstatusPropiedad;
use App\Models\GaleriaPropiedades;
use App\Models\Locacion;
use App\Models\Propiedades;
use App\Models\Reviews;
use App\Models\Seller;
use App\Models\SolicitudVendedor;
use App\Models\TipoPropiedad;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'celular' => 'required',
            'foto' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->file('foto') != null){
            $Imgf = $request->file('foto');
            $fotomove = $data['name'] . '-documento-' . time() . rand(1, 1000) . '.' . $Imgf->extension();
            $imgS = $Imgf->move(public_path('fotos_documentos'), $fotomove);
        }else{
            $fotomove = null;
        }

        $user = Seller::create([
            'name' => $request->name,
            'email' => $request->email,
            'foto' =>  $fotomove,
            'celular' =>  $request->celular,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('clienteRegistrado.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'foto' => 'required',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

        ]);

        if($request->file('foto') != null){
            $Imgf = $request->file('foto');
            $fotomove = $data['name'] . '-documento-' . time() . rand(1, 1000) . '.' . $Imgf->extension();
            $imgS = $Imgf->move(public_path('fotos_documentos'), $fotomove);
        }else{
            $fotomove = null;
        }

        Seller::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'foto' =>  $fotomove,
            'celular' =>  $request->celular,
            'password' => Hash::make($request->password),
            'updated_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "El cliente se actualizó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function indexPropiedad()
    {

        $propiedades = DB::table('propiedades')->where("seller_id", "=", Auth::user()->id)->get();

        return view('clienteRegistrado.propiedades.index', compact('propiedades'));
    }

    public function createPropiedad()
    {
        $estatuspropiedad = DB::table('estatus_propiedads')->get();
        $locacion = DB::table('locacions')->get();
        $tipopropiedades = DB::table('tipo_propiedads')->get();
        $reviews = DB::table('reviews')->get();
        $solicitudvendedor = DB::table('solicitud_vendedors')->get();
        $seller = DB::table('sellers')->get();
        return view('clienteRegistrado.propiedades.create', compact('estatuspropiedad', 'locacion', 'tipopropiedades',  'reviews', 'solicitudvendedor', 'seller'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePropiedad(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'precio' => 'required',


        ], [
            'solicitud_vendedor_id.required' => 'Se debe seleccionar algo',
            'review_id.required' => 'Se debe seleccionar algo',
            'estatus_propiedad_id.required' => 'Se debe seleccionar algo',
            'locacion_id.required' => 'Se debe seleccionar algo',
            'tipo_propiedad_id.required' => 'Se debe seleccionar algo',
            'planos' => 'Se debe seleccionar algo',
            'nearbys' => 'Se debe escribir algo',
            'seller_id'=> 'Se debe seleccionar algo '

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
            'ubicacion' => $request->ubicacion,
            'seller_id' => Auth::user()->id,
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

        return redirect()->route('SellerPropiedad.index')->with($notificacion);
    }

    public function editPropiedad($id)
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
            return view('clienteRegistrado.propiedades.update', compact("propiedades", "estatuspropiedad", "locacion", "tipopropiedades",  "reviews", "solicitudvendedor", "galeria_priopiedad", "seller"));
        }

        $notification = array(
            'message' => "La propiedad no existe",
            "alter-type" => "error"
        );

        return redirect()->route('SellerPropiedad.index')->with($notification);
    }

    public function updatePropiedad(Request $request, $id)
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

        return redirect()->route('SellerPropiedad.index')->with($notification);
    }

    public function destroyPropiedad($id)
    {
        if ($id > 0) {
            Propiedades::findOrFail($id)->delete();

            $notification = array(
                'message' => "La propiedad se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('SellerPropiedad.index')->with($notification);
        }

        $notification = array(
            'message' => "La propiedad no existe",
            "alter-type" => "error"
        );

        return redirect()->route('SellerPropiedad.index')->with($notification);
    }


}
