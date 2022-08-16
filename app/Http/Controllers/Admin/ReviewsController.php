<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reviews;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = DB::table('reviews')->get();

        return view('admin.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        Reviews::insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Review Creada correctamente',
            'alert-type'
        );

        return redirect()->route('review.index')->with($notification);
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
            $review = Reviews::findOrFail($id);
            return view('admin.reviews.update', compact("review"));
        }

        $notification = array(
            'message' => "El Review no existe",
            "alter-type" => "error"
        );

        return redirect()->route('review.index')->with($notification);
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
            'descripcion' => 'required'
        ]);

        Reviews::findOrFail($id)->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Review Creada correctamente',
            'alert-type'
        );

        return redirect()->route('review.index')->with($notification);
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
            Reviews::findOrFail($id)->delete();

            $notification = array(
                'message' => "La Review se eliminó correctamente",
                "alter-type" => "error"
            );

            return  redirect()->route('review.index')->with($notification);
        }

        $notification = array(
            'message' => "La Review no existe",
            "alter-type" => "error"
        );

        return redirect()->route('review.index')->with($notification);
    }
}
