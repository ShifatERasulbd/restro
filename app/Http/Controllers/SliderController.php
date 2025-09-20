<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
use Illuminate\Http\Request;

class SliderController extends  Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
     
        $slider=Sliders::OrderBy('id','DESC')->get();
        return view('backend.sliders.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.sliders.create');
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
    
        if($request-> hasFile('SliderImage')){
            $image=$request->file('SliderImage');
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('Sliders'), $imageName);

            $validated['image']='Sliders/'.$imageName;
        } else {
            $validated['image'] = null;
        }

        $data=[
            'title'=>$validated['title'],
            'subTitle'=>$validated['subtitle'],
            'image'=>$validated['image']
        ];
    

        $Slider=Sliders::create($data);
        return redirect()->route('sliders');

    }

    /**
     * Display the specified resource.
     */
    public function show(Sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sliders $sliders,$id)
    {
        //
        $slider=Sliders::findorFail($id);
       return view('backend.sliders.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sliders $sliders)
    {
        //
        $id=$request->id;
       
        $validated=$request->validate([
            'title'=> 'nullable|string|max:255',
            'subtitle'=>'nullable|string|max:255'
        ]);
          $sliders=Sliders::findorFail($id);
         if($request-> hasFile('SliderImage')){
            $image=$request->file('SliderImage');
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('Sliders'), $imageName);

            $validated['image']='Sliders/'.$imageName;
        } else {
            $validated['image'] = $sliders->image;
        }
        // dd($validated['image']);
       
          $data=[
            'title'=>$validated['title'],
            'subTitle'=>$validated['subtitle'],
            'image'=>$validated['image'],
     ];

        $sliders->update($data);
        return redirect()->route('sliders');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sliders $sliders,$id)
    {
        //
        $sliders=Sliders::findorFail($id);
        $sliders->delete();
        return redirect()->route('sliders');
    }
}
