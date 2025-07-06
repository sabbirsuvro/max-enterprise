<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = [
        'embedid',
        'service',
    ];

    public function cleaning()
    {
        return $this->belongsTo(Cleaning::class, 'service');
    }
}
