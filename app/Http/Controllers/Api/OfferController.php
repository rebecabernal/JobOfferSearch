<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // Read
    {
        return response()->json(Offer::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create() // Create -> formulario
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Create mandar a la bbdd el request
    {

        $offer = Offer::create([
            'title' => $request->title,
            'enterprise' => $request->enterprise,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        $offer->save();
        return response()->json($offer, 200); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // cread by id
    {
        return response()->json(Offer::find($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id) // update -> formulario
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //update mandar los cambios a la bbdd
    {
        $offer = Offer::find($id);

        $offer->update([
            'title' => $request->title,
            'enterprise' => $request->enterprise,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //delete
    {
        Offer::find($id)->delete();
    }
}
