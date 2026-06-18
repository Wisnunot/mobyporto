<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title',
        'brand',
        'year',
        'price',
        'mileage',
        'transmission',
        'fuel_type',
        'color',
        'description',
        'image',
        'is_consignment',
        'status'
    ];
}
