<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gallery=Gallery::OrderBy('id','Desc')->get();
        return view('backend.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

         if ($request->hasFile('galleryImages')) {
                foreach ($request->file('galleryImages') as $galleryImage) {
                    $galleryImageName = time() . '_' . $galleryImage->getClientOriginalName();
                    $galleryImage->move(public_path('gallery/'), $galleryImageName);

                    // Save each image in ProductsMultiImage table
                    Gallery::create([
                      
                        'image' => 'gallery/' . $galleryImageName,
                    ]);
                }
            }
            return redirect()->route('gallery');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery,$id)
    {
        //
        $gallery=Gallery::findorFail($id);
        return view('backend.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('galleryImages')) {
            // Delete old image file if exists
            if ($gallery->image && file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            // Assuming updating to the first uploaded image
            $galleryImage = $request->file('galleryImages')[0];
            $galleryImageName = time() . '_' . $galleryImage->getClientOriginalName();
            $galleryImage->move(public_path('gallery/'), $galleryImageName);

            $gallery->update([
                'image' => 'gallery/' . $galleryImageName,
            ]);
        }

        return redirect()->route('gallery')->with('success', 'Gallery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Delete image file if exists
        if ($gallery->image && file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }

        $gallery->delete();

        return redirect()->route('gallery')->with('success', 'Gallery deleted successfully');
    }
}
