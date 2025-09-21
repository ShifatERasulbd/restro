<?php

namespace App\Http\Controllers;
use App\Models\Sliders;
use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
         $slider=Sliders::OrderBy('id','DESC')->get();
         $foodCategory=FoodCategory::OrderBy('id','DESC')->get();
         $FeaturedFood=Food::where('featuredItems','on')->OrderBy('id','DESC')->get();
         $popularFood=Food::OrderBy('id','DESC')->get();
        return view('frontend.home',compact('slider','foodCategory','FeaturedFood','popularFood'));
    }

    public function categoryItems($id){
        $categories = FoodCategory::with('foods')->get() ?? collect([]);
        $activeCategoryId = request()->query('category');
        if (!$activeCategoryId && $categories->count() > 0) {
            $activeCategoryId = $categories->first()->id;
        }
        return view('frontend.categoryItems', compact('categories', 'activeCategoryId'));
    }
}
