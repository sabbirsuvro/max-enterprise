<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'img1',
        'img2',
        'img3',
        'video',
        'year',
        'des',
        'wptitle1',
        'wptitle2',
        'wptitle3',
        'wptitle4',
        'wpdes1',
        'wpdes2',
        'wpdes3',
        'wpdes4',
    ];
}
