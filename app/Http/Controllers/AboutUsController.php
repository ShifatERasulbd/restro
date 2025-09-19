<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $aboutUs=AboutUs::OrderBy('id','Desc')->get();
        return view('backend.aboutUs.index',compact('aboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.aboutUs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         $validated=$request->validate([
            'locationTitle'=> 'nullable|string|max:255',
            'location'=>'nullable|string|max:255',
            'contactNumberTitle'=> 'nullable|string|max:255',
            'contactNumber'=>'nullable|string|max:255',
            'openingHoursTitle'=> 'nullable|string|max:255',
            'openingHours'=>'nullable|string|max:255',
            'orderTitle'=> 'nullable|string|max:255'
        ]);
        $data=[
            'locationTitle'=>$validated['locationTitle'],
            'location'=>$validated['location'],
            'contactNumberTitle'=>$validated['contactNumberTitle'],
            'contactNumber'=>$validated['contactNumber'],
            'openingHoursTitle'=>$validated['openingHoursTitle'],
            'openingHours'=>$validated['openingHours'],
             'orderTitle'=>$validated['orderTitle'],
    
        ];
    

        $AboutUs=AboutUs::create($data);

        return redirect()->route('aboutUs');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs,$id)
    {
        //
        $aboutUs=AboutUs::findorFail($id);
        return view('backend.aboutUs.edit',compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $aboutUs)
    {
        //
               $id=$request->id;
          $validated=$request->validate([
            'locationTitle'=> 'nullable|string|max:255',
            'location'=>'nullable|string|max:255',
            'contactNumberTitle'=> 'nullable|string|max:255',
            'contactNumber'=>'nullable|string|max:255',
            'openingHoursTitle'=> 'nullable|string|max:255',
            'openingHours'=>'nullable|string|max:255',
            'orderTitle'=> 'nullable|string|max:255',
            'aboutUsTitle'=>'nullable|string|max:255',
            'aboutUsSubTitle'=>'nullable|string|max:255',
            'description'=>'nullable',
            'AboutImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $aboutUs=AboutUs::findorFail($id);

         if($request-> hasFile('AboutImage')){
            $image=$request->file('AboutImage');
        
            $imageName=time().'_'.$image->getClientOriginalName();
            $image->move(public_path('AboutUs'), $imageName);

            $validated['image']='AboutUs/'.$imageName;
        } else {
            $validated['image'] = $aboutUs->image;
        }
         $data=[
            'locationTitle'=>$validated['locationTitle'],
            'location'=>$validated['location'],
            'contactNumberTitle'=>$validated['contactNumberTitle'],
            'contactNumber'=>$validated['contactNumber'],
            'openingHoursTitle'=>$validated['openingHoursTitle'],
            'openingHours'=>$validated['openingHours'],
            'orderTitle'=>$validated['orderTitle'],
            'aboutUsTitle'=>$validated['aboutUsTitle'],
            'aboutUsSubTitle'=>$validated['aboutUsSubTitle'],
             'description'=>$validated['description'],
             'image'=>$validated['image'],
    
        ];
        $aboutUs->update( $data);

        return redirect()->route('aboutUs');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
