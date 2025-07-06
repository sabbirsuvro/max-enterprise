<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tesimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desig',
        'service',
        'review',
    ];

    public function cleaning()
    {
        return $this->belongsTo(Cleaning::class, 'service');
    }
}
