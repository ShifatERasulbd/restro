<?php

namespace App\Http\Controllers;

use App\Models\Sauce;
use Illuminate\Http\Request;

class SaucesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sauces = Sauce::all();
        return view('backend.food.sauces.index', compact('sauces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.food.sauces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        Sauce::create($validated);
        return redirect()->route('sauces')->with('message', 'Sauce created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sauce $sauce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sauce $sauce, $id)
    {
        //
        $sauces=Sauce::find($id);
        return view('backend.food.sauces.edit', compact('sauces'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sauce $sauce)
    {
        //

        $sauce = Sauce::find($request->id);
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
        $sauce->update($validated);
        return redirect()->route('sauces')->with('message', 'Sauce updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sauce $sauce)
    {
        //
    }
}
