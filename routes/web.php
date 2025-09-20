<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\OrderDesignController;
use App\Http\Controllers\CustomerReviewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SaucesController;
Route::get('/', function () {
    return view('frontend/home');
});

// Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// sliders controller
Route::get('/admin/slider',[SliderController::class,'index'])->middleware(['auth','verified'])->name('sliders');
Route::get('admin/slider/create',[SliderController::class,'create'])->middleware(['auth','verified'])->name('sliders.create');
Route::post('admin/slider/store',[SliderController::class,'store'])->middleware(['auth','verified'])->name('sliders.store');
Route::get('admin/slider/edit/{id}',[SliderController::class,'edit'])->middleware(['auth','verified'])->name('sliders.edit');
Route::Put('admin/slider/update',[SliderController::class,'update'])->middleware(['auth','verified'])->name('sliders.update');
Route::Delete('admin/slider/delete/{id}',[SliderController::class,'destroy'])->middleware(['auth','verified'])->name('sliders.delete');


// aboutus
Route::get('admin/aboutUs', [AboutUsController::class,'index'])->middleware(['auth','verified'])->name('aboutUs');
Route::get('admin/aboutUs/create',[AboutUsController::class,'create'])->middleware(['auth','verified'])->name('aboutUs.create');
Route::post('admin/aboutUs/store',[AboutUsController::class,'store'])->middleware(['auth','verified'])->name('aboutUs.store');
Route::get('admin/aboutUs/edit/{id}',[AboutUsController::class,'edit'])->middleware(['auth','verified'])->name('aboutUs.edit');
Route::put('admin/aboutUs/update/{id}',[AboutUsController::class,'update'])->middleware(['auth','verified'])->name('aboutUs.update');

// order design Controller
Route::get('admin/offer',[OrderDesignController::class,'index'])->middleware(['auth','verified'])->name('orderDesign');
Route::get('admin/offer/create',[OrderDesignController::class,'create'])->middleware(['auth','verified'])->name('orderDesign.create');
Route::post('admin/offer/store',[OrderDesignController::class,'store'])->middleware(['auth','verified'])->name('orderDesign.store');
Route::get('admin/offer/edit/{id}',[OrderDesignController::class,'edit'])->middleware(['auth','verified'])->name('orderDesign.edit');
Route::put('admin/offer/update',[OrderDesignController::class,'update'])->middleware(['auth','verified'])->name('orderDesign.update');
Route::delete('admin/offer/delete/{id}',[OrderDesignController::class,'destroy'])->middleware(['auth','verified'])->name('orderDesign.delete');

// customer review
Route::get('admin/customerReview',[CustomerReviewsController::class,'index'])->middleware(['auth','verified'])->name('customerReview');
Route::get('admin/customerReview/create',[CustomerReviewsController::class,'create'])->middleware(['auth','verified'])->name('customerReview.create');
Route::post('admin/customerReview/store',[CustomerReviewsController::class,'store'])->middleware(['auth','verified'])->name('customerReview.store');
Route::get('admin/customerReview/edit/{id}',[CustomerReviewsController::class,'edit'])->middleware(['auth','verified'])->name('customerReview.edit');
Route::put('admin/customerReview/update',[CustomerReviewsController::class,'update'])->middleware(['auth','verified'])->name('customerReview.update');
Route::delete('admin/customerReview/delete/{id}',[CustomerReviewsController::class,'destroy'])->middleware(['auth','verified'])->name('customerReview.delete');


// gallery Controller
Route::get('admin/gallery',[GalleryController::class,'index'])->middleware(['auth','verified'])->name('gallery');
Route::get('admin/gallery/create',[GalleryController::class,'create'])->middleware(['auth','verified'])->name('gallery.create');
Route::Post('admin/gallery/store',[GalleryController::class,'store'])->middleware(['auth','verified'])->name('gallery.store');
Route::get('admin/gallery/edit/{id}',[GalleryController::class,'edit'])->middleware(['auth','verified'])->name('gallery.edit');
Route::put('admin/gallery/update/{id}',[GalleryController::class,'update'])->middleware(['auth','verified'])->name('gallery.update');
Route::delete('admin/gallery/delete/{id}',[GalleryController::class,'destroy'])->middleware(['auth','verified'])->name('gallery.delete');

// Food CategoryController
Route::get('admin/foodCategory',[FoodCategoryController::class,'index'])->middleware(['auth','verified'])->name('foodCategory');
Route::get('admin/foodCategory/create',[FoodCategoryController::class,'create'])->middleware(['auth','verified'])->name('foodCategory.create');
Route::Post('admin/foodCategory/store',[FoodCategoryController::class,'store'])->middleware(['auth','verified'])->name('foodCategory.store');
Route::get('admin/foodCategory/edit/{id}',[FoodCategoryController::class,'edit'])->middleware(['auth','verified'])->name('foodCategory.edit');
Route::put('admin/foodCategory/update',[FoodCategoryController::class,'update'])->middleware(['auth','verified'])->name('foodCategory.update');
Route::Delete('admin/foodCategory/delete/{id}',[FoodCategoryController::class,'destroy'])->middleware(['auth','verified'])->name('foodCategory.delete');


// food Controller
Route::get('admin/food',[FoodController::class,'index'])->middleware(['auth','verified'])->name('food');
Route::get('admin/food/create',[FoodController::class,'create'])->middleware(['auth','verified'])->name('food.create');
Route::Post('admin/food/store',[FoodController::class,'store'])->middleware(['auth','verified'])->name('food.store');
Route::get('admin/food/edit/{id}',[FoodController::class,'edit'])->middleware(['auth','verified'])->name('food.edit');
Route::put('admin/food/update',[FoodController::class,'update'])->middleware(['auth','verified'])->name('food.update');
Route::delete('admin/food/delete',[FoodController::class,'destroy'])->middleware(['auth','verified'])->name('food.delete');

// sauces Controller
Route::get('admin/sauces',[SaucesController::class,'index'])->middleware(['auth','verified'])->name('sauces');
Route::get('admin/sauces/create',[SaucesController::class,'create'])->middleware(['auth','verified'])->name('sauces.create');
Route::post('admin/sauces/store',[SaucesController::class,'store'])->middleware(['auth','verified'])->name('sauces.store');
Route::get('admin/sauces/edit/{id}',[SaucesController::class,'edit'])->middleware(['auth','verified'])->name('sauces.edit');
Route::put('admin/sauces/update',[SaucesController::class,'update'])->middleware(['auth','verified'])->name('sauces.update');
Route::delete('admin/sauces/delete/{id}',[SaucesController::class,'destroy'])->middleware(['auth','verified'])->name('sauces.delete');
require __DIR__.'/auth.php';
