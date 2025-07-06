<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'bgimg',
        'img',
        'title1',
        'title2',
        'wave',
        'project',
        'cleaner',
        'customer',
    ];
}
