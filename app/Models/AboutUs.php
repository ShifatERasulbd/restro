<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    //
    protected $fillable=[
        'locationTitle',
            'location',
            'contactNumberTitle',
            'contactNumber',
            'openingHoursTitle',
            'openingHours',
            'orderTitle',
            'aboutUsTitle',
            'aboutUsSubTitle',
            'description',
            'image'
    ];
}
