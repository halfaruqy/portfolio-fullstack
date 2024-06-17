<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'livelink', 'livelink_text', 'repolink', 'caselink', 'tech_stack'];

    protected $casts = [
        'tech_stack' => 'array', // This will ensure the JSON is cast to an array
    ];
}
