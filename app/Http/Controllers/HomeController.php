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

    public function categoryItems($slug){
        $categories = FoodCategory::with('foods')->get() ?? collect([]);
        $activeCategory = FoodCategory::where('slug', $slug)->first();
        $activeCategoryId = $activeCategory ? $activeCategory->id : ($categories->count() > 0 ? $categories->first()->id : null);
        return view('frontend.categoryItems', compact('categories', 'activeCategoryId'));
    }
}
