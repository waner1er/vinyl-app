<?php

namespace App\Http\Controllers;

use App\Models\Vinyl;
use App\Models\VinylCases;
use Illuminate\Http\Request;

class VinylController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vinyls = VinylCases::all();




        return response()->json($vinyls);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function getVinyl(Vinyl $vinyl)
    {
        return response()->json(
            [
                'title' => $vinyl->title,
                'toto' => $vinyl->id
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vinyl $vinyl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vinyl $vinyl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vinyl $vinyl)
    {
        //
    }
}
