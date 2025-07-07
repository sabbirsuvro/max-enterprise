<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codepush extends Model
{
    use HasFactory;
    protected $fillable = [
        'header',
        'body',
        'footer',
    ];
}
