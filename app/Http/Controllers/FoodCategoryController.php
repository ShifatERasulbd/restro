<?php

namespace App\Http\Controllers;

use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $foodCategory=FoodCategory::OrderBy('id','Desc')->get();
        return view('backend.food.foodcategory.index',compact('foodCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.food.foodcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
    
            'name'=> 'nullable|string|max:255',
        ]);
         $foodCategory=FoodCategory::create($validated);
         return redirect()->route('foodCategory');
    }

    /**
     * Display the specified resource.
     */
    public function show(FoodCategory $foodCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodCategory $foodCategory,$id)
    {
        //
        $foodCategory=FoodCategory::findorFail($id);
        return view('backend.food.foodcategory.edit',compact('foodCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FoodCategory $foodCategory)
    {
        //
        $id=$request->id;
        $validated=$request->validate([
                   'name'=> 'nullable|string|max:255',
        ]);
         $foodCategory=FoodCategory::findorFail($id);
          $foodCategory->update($validated);
          return redirect()->route('foodCategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodCategory $foodCategory,$id)
    {
        //
         $foodCategory=FoodCategory::findorFail($id);
        $foodCategory->delete();
        return redirect()->route('foodCategory');
    }
}
