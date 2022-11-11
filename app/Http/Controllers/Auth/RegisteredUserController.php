<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
        $propiedades = DB::table('propiedades')->get();

        return view('clienteRegistrado.property', compact('propiedades'));
    }


}
