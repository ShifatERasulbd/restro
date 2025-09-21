<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['name', 'ingredients', 'price','offerPrice','featuredItems', 'image','categoryId', 'slug'];

    // Automatically generate slug from name
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            if ($model->name) {
                $model->slug = \Str::slug($model->name);
            }
        });
    }
    public function category()
    {
        return $this->belongsTo(FoodCategory::class, 'categoryId', 'id');
    }
}
