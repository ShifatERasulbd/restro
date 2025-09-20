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
        $validated = $request->validate([
                'name'=> 'nullable|string|max:255',
            ]);

            $data = [
                'name' => $validated['name'],
                'image' => null, // default null
            ];

            // If image uploaded, process it
            if ($request->hasFile('FoodCategoryImage')) {
                $image = $request->file('FoodCategoryImage');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('FoodCategory'), $imageName);

                $data['image'] = 'FoodCategory/' . $imageName;
            }
          

            $foodCategory = FoodCategory::create($data);

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
  public function update(Request $request)
{
    $id = $request->id;
    $foodCategory = FoodCategory::findOrFail($id);

    // Validate inputs
    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    // Handle file upload
    if ($request->hasFile('foodCategoryImage')) {
        $image = $request->file('foodCategoryImage');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('FoodCategory'), $imageName);
        $foodCategory->image = 'FoodCategory/' . $imageName;
    }

    // Update name
    $foodCategory->name = $validated['name'] ?? $foodCategory->name;

    // Save changes
    $foodCategory->save();

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
