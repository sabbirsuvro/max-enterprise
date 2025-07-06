<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slogan',
        'address',
        'phone',
        'hour',
        'email',
        'fb',
        'twitter',
        'linkedin',
        'insta',
        'youtube',
        'logo',
        'icon',
        'map',
    ];
}


