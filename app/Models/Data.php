<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'level1',
        'level2',
        'level3',
        'price',
        'price_sp',
        'qnty',
        'property_fields',
        'tbuy',
        'unit',
        'pic',
        'display_on_main',
        'description'
    ];
}
