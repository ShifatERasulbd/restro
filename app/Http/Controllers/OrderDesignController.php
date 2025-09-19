<?php

namespace App\Http\Controllers;

use App\Models\OrderDesign;
use Illuminate\Http\Request;

class OrderDesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orderDesign=OrderDesign::orderBy('id','Desc')->get();
        return view('backend.orderDesign.index',compact('orderDesign'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.orderDesign.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          $validated=$request->validate([
            'title'=> 'nullable|string|max:255',
            'subtitle'=>'nullable|string|max:255'
        ]);
    
        if($request-> hasFile('offerImage')){
            $image=$request->file('offerImage');
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('Offers'), $imageName);

            $validated['image']='Offers/'.$imageName;
        } else {
            $validated['image'] = null;
        }

        $data=[
            'title'=>$validated['title'],
            'subtitle'=>$validated['subtitle'],
            'image'=>$validated['image']
        ];
    

        $offer=OrderDesign::create($data);
        return redirect()->route('orderDesign');
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderDesign $orderDesign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDesign $orderDesign,$id)
    {
        //
        $offer=OrderDesign::findorFail($id);
        return view('backend.orderDesign.edit',compact('offer'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderDesign $orderDesign)
    {
        //
         $id=$request->id;
       
        $validated=$request->validate([
            'title'=> 'nullable|string|max:255',
            'subtitle'=>'nullable|string|max:255'
        ]);
          $offer=OrderDesign::findorFail($id);
         if($request-> hasFile('OfferImage')){
            $image=$request->file('OfferImage');
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('Offers'), $imageName);

            $validated['image']='Offers/'.$imageName;
        } else {
            $validated['image'] = $offer->image;
        }
        // dd($validated['image']);
       
          $data=[
            'title'=>$validated['title'],
            'subTitle'=>$validated['subtitle'],
            'image'=>$validated['image'],
     ];

        $offer->update($data);
        return redirect()->route('orderDesign');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDesign $orderDesign,$id)
    {
        //
        $offer=OrderDesign::findorFail($id);
          $offer->delete();
        return redirect()->route('orderDesign');
    }
}
