<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Seller;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    public function SellerIndex()
    {
        return view('seller.seller_login');
    } // END METHOD


    public function SellerDashboard()
    {
        return view('seller.index');
    } // END METHOD


    public function SellerLogin(Request $request)
    {
        // dd($request->all());

        $check = $request->all();
        if (Auth::guard('seller')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('seller.dashboard')->with('error', 'Seller Login Successfully');
        } else {
            return back()->with('error', 'Invaild Email Or Password');
        }
    } // end mehtod


    public function SellerLogout()
    {

        Auth::guard('web')->logout();
        $notification = array(
            'message' => "Vendedor Desconectado exitosamente",
            "alert-type" => "success"
        );
        return redirect()->route('index.page')->with($notification);
    } // end mehtod


    public function SellerRegister()
    {
        return view('seller.seller_register');
    } // end mehtod


    public function SellerRegisterCreate(Request $request)
    {

        // dd($request->all());

        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),

        ]);

        return redirect()->route('seller_login_from')->with('error', 'Seller Created Successfully');
    } // end mehtod

    public function index()
    {
        $sellers = DB::table('sellers')->get();
        return view('admin.sellers.index', compact('sellers'));
    }

    public function create()
    {
        return view('admin.sellers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ], [
            'name.required' => 'El nombre del Seller es requerido',
            'email.required' => 'El correo del Seller es requerido',


        ]);

        Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'stauts' => 0,
            'created_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "El Seller se agregó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('sellers.index')->with($notification);
    }

    public function edit($id)
    {
        if ($id > 0) {
            $seller = Seller::findOrFail($id);
            return view('admin.sellers.update', compact("seller"));
        }

        $notification = array(
            'message' => "El Seller no existe",
            "alter-type" => "error"
        );

        return redirect()->route('sellers.index')->with($notification);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',

        ], [
            'name.required' => 'El nombre del Seller es requerido',
            'email.required' => 'El correo del Seller es requerido',

        ]);

        Seller::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'stauts' => 0,
            'updated_at' => Carbon::now()
        ]);

        $notification  = array(
            'message' => "El Seller se actualizó Correctamente",
            'alert-type' => "success",
        );

        return redirect()->route('sellers.index')->with($notification);
    }

    public function destroy($id)
    {
        if ($id > 0) {
            Seller::findOrFail($id)->delete();

            $notification = array(
                'message' => "El Seller se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('sellers.index')->with($notification);
        }

        $notification = array(
            'message' => "El Seller no existe",
            "alter-type" => "error"
        );

        return redirect()->route('sellers.index')->with($notification);
    }
}
