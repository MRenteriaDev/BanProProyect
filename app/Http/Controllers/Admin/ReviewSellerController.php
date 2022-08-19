<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReviewSeller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Seller;


class ReviewSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review_seller = DB::table('review_sellers')->get();

        return view('admin.review_sellers.index', compact('review_seller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellers = DB::table('sellers')->get();
        return view('admin.review_sellers.create', compact('sellers'));
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
            'descripcion' => 'required',
            'seller_id' => 'required'
        ]);


        ReviewSeller::insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'seller_id' => $request->seller_id,
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La alta de la review del vendedor fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('reviewsellers.index')->with($notificacion);
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
        $review_seller = ReviewSeller::findorFail($id);
        $sellers = DB::table('sellers')->get();

        return view('admin.review_sellers.update', compact('review_seller', 'sellers'));
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
        $validate = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'seller_id' => 'required'
        ]);


        ReviewSeller::findOrFail($id)->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'seller_id' => $request->seller_id,
            'created_at' => Carbon::now()
        ]);

        $notificacion = array(
            'message' => "La actualizacion de la review del vendedor fue exitosa",
            'alert-type' => 'success'
        );

        return redirect()->route('reviewsellers.index')->with($notificacion);
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
            ReviewSeller::findOrFail($id)->delete();

            $notification = array(
                'message' => "La review del seller se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('reviewsellers.index')->with($notification);
        }

        $notification = array(
            'message' => "La locacion no existe",
            "alter-type" => "error"
        );

        return redirect()->route('reviewsellers.index')->with($notification);
    }
}
