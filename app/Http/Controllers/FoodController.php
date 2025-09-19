<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $food=Food::with('category')->OrderBy('id','Desc')->get();
        return view('backend.food.food.index',compact('food'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('backend.food.food.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
            'name'=>'required|string',
            'ingredients'=>'nullable|string',
            'price'=>'nullable|string',
            'packagingPrice'=>'nullable|string',
        ]);

        if($request-> hasFile('FoodImage')){
            $image=$request->file('FoodImage');
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('Foods'), $imageName);

            $validated['image']='Foods/'.$imageName;
        } else {
            $validated['image'] = null;
        }
         $data=[
            'name'=>$validated['name'],
            'ingredients'=>$validated['ingredients'],
            'price'=>$validated['price'],
            'image'=>$validated['image'],
            'packagingPrice'=>$validated['packagingPrice'],
        ];

        Food::create($data);

        return redirect()->route('food');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food,$id)
    {
        //
        $food=Food::find($id);
        return view('backend.food.food.edit',compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
        $id=$request->id;
        $food=Food::find($id);
        $validated=$request->validate([
            'name'=>'required|string',
            'ingredients'=>'nullable|string',
            'price'=>'nullable|string',
            'packagingPrice'=>'nullable|string',
        ]);
        if($request-> hasFile('FoodImage')){
            $image=$request->file('FoodImage');
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('Foods'), $imageName);

            $validated['image']='Foods/'.$imageName;
        } else {
            $validated['image'] = $food->image;
        }
         $data=[
            'name'=>$validated['name'],
            'ingredients'=>$validated['ingredients'],
            'price'=>$validated['price'],
            'image'=>$validated['image'],
            'packagingPrice'=>$validated['packagingPrice'],
        ];

        $food->update($data);

        return redirect()->route('food');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
