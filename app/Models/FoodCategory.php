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
        'image'
    ];
}
