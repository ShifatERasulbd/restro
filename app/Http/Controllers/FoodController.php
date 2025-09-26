<?php

namespace App\Http\Controllers;
use App\Models\FoodCategory;
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
        
        $foodCategory=FoodCategory::all();
        return view('backend.food.food.create',compact('foodCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // dd($request->all());
    $validated = $request->validate([
        'name'           => 'required|string|max:255',
         'price'          => 'nullable|numeric',
         'offerPrice'     => 'nullable|numeric',
        'ingredients'    => 'nullable|string',
        'categoryId'    => 'nullable|string',
        'featuredItems'  => 'nullable|string',       
        'FoodImage'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
   
    
    // Handle image upload
    if ($request->hasFile('FoodImage')) {
        $image      = $request->file('FoodImage');
        $imageName  = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('Foods'), $imageName);

        $validated['image'] = 'Foods/' . $imageName;
    } else {
        $validated['image'] = null;
    }

    // Create food item
    Food::create([
        'name'           => $validated['name'],
        'price'          => $validated['price'] ?? null,   
        'offerPrice'     => $validated['offerPrice'] ?? null,
        'ingredients'    => $validated['ingredients'] ?? null,
        'categoryId'    => $validated['categoryId'] ?? null,
        'image'          => $validated['image'],
        'featuredItems'  => $validated['featuredItems'] ?? null,
        
    ]);

    return redirect()->route('food')->with('success', 'Food item created successfully!');
}

    /**
     * Display the specified resource (frontend food details).
     */
    public function show($slug)
    {
        $food = Food::with('category')->where('slug', $slug)->firstOrFail();
        return view('frontend.foodItemDetailsPage', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food,$id)
    {
        //
        $foodCategory=FoodCategory::all();
        $food=Food::find($id);
        return view('backend.food.food.edit',compact('food','foodCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
        $id=$request->id;
        $food=Food::find($id);
       $validated = $request->validate([
        'name'           => 'required|string|max:255',
         'price'          => 'nullable|numeric',
         'offerPrice'     => 'nullable|numeric',
        'ingredients'    => 'nullable|string',
        'categoryId'    => 'nullable|string',
        'featuredItems'  => 'nullable|string',       
        'FoodImage'      => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
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
            'offerPrice'=>$validated['offerPrice'],
            'image'=>$validated['image'],
            'categoryId'=>$validated['categoryId'],
            'featuredItems'=>$validated['featuredItems'],
           
        ];

        $food->update($data);

        return redirect()->route('food');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food,$id)
    {
        $food=Food::find($id);
        $food->delete();
        return redirect()->route('food');
    }
}
