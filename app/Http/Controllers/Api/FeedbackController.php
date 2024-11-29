<?php

namespace App\Http\Controllers\Api;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Feedback::all(), 200);
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
    public function store(Request $request)
    {
        $feedback = Feedback::create([
            'offers_id' => $request-> offers_id,
            'news' => $request->news,
        ]);
        $feedback->save();
        return response()->json($feedback, 200); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Feedback::find($id),200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feedback = Feedback::find($id);

        $feedback->update([
            'offers_id' => $request-> offers_id,
            'news' => $request->news,
        ]);
        $feedback->save();
        return response()->json($feedback, 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feedback::find($id)->delete();
    }
}
