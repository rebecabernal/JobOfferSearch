<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       if ($request->action === 'delete')
        {
            $this->destroy($request->id);
            return Redirect::to(route('index'));
        }
        if ($request->action === 'pause')
        {
            $this->edit($request->id, 0);
            return Redirect::to(route('index'));
        }
        if ($request->action === 'resume')
        {
            $this->edit($request->id, 1);
            return Redirect::to(route('index'));
        }
        $jobs = Offer::all();
        return view('index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offer = Offer::find($id);
        
        if ($offer)
        return view ('show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, bool $status)
    {
        Offer::find($id)->update(['status' => $status]);
    }

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer = Offer::find($id);
        if($offer)
        {
            $offer->delete();
        }
    }
}
