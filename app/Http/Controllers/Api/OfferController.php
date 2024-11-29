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
        $offers = Offer::get();
        return response()->json($offers, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() // Create -> formulario
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //Create mandar a la bbdd el request
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // cread by id
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // update -> formulario
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) //update mandar los cambios a la bbdd
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //delete
    {
        //
    }
}
