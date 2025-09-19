<?php

namespace App\Http\Controllers;

use App\Models\CustomerReview;
use Illuminate\Http\Request;

class CustomerReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $customerReview=CustomerReview::orderBy('id','desc')->get();
        return view('backend.customerReview.index',compact('customerReview'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('backend.customerReview.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated=$request->validate([
           'customerName' => 'required|string|max:255',
            'review'=>'required'
        ]);
        $customerReview=CustomerReview::create($validated);
        return redirect()->route('customerReview');
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerReview $customerReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $customerReview = CustomerReview::findOrFail($id);
        return view('backend.customerReview.edit', compact('customerReview'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $validated = $request->validate([
            'customerName' => 'required|string|max:255',
            'review' => 'required'
        ]);
        $customerReview = CustomerReview::findOrFail($id);
        $customerReview->update($validated);
        return redirect()->route('customerReview');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customerReview = CustomerReview::findOrFail($id);
        $customerReview->delete();
        return redirect()->route('customerReview');
    }
}
