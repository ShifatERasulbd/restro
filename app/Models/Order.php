<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'phone',
        'address',
        'total_amount',
        'items',
        'status'
    ];

    protected $casts = [
        'items' => 'array', // Cast JSON to array
        'total_amount' => 'decimal:2'
    ];
}
