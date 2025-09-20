<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'ingredients', 'price','offerPrice','featuredItems', 'image','categoryId'];
    public function category()
    {
        return $this->belongsTo(FoodCategory::class, 'categoryId');
    }
}
