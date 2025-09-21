<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    //
    public function foods()
    {
        return $this->hasMany(Food::class, 'categoryId');
    }
    protected $fillable=[
        'name',
        'image',
        'slug'
    ];

    // Automatically generate slug from name
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            if ($model->name) {
                $model->slug = 
                    \Str::slug($model->name);
            }
        });
    }
}
