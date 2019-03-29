<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'catalog_id',
        'description',
        'price',
        'image',
        'status',
    ];
}
