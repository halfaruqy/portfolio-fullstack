<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    protected $table = 'hero_section'; // Specify the correct table name

    protected $fillable = ['title', 'description', 'hero_image', 'hero_icon'];

    protected $casts = [
        'hero_icon' => 'array', // This will ensure the JSON is cast to an array
    ];
}