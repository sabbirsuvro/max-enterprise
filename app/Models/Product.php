<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'price',
        'details',
        'category',
    ];

    protected $casts = [
        'img' => 'array',
    ];

    public function categoryData()
    {
        return $this->belongsTo(Category::class, 'category');
    }
}
