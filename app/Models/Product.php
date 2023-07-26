<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $timestamp = false;

    protected $fillable = [
        'name', 'prices', 'description', 'category_id', 'brand_id', 'thumbnail'
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
