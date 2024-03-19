<?php

namespace App\Http\Controllers;

use App\Models\Localitie;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $localities = Localitie::all();
        
        return view('localitie.index',[
            'localities' => $localities,
            'resource' => 'localities',
        ]);
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
    public function show(string $id)
    {
        $localitie = Localitie::find($id);
        
        return view('localitie.show',[
            'localitie' => $localitie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
