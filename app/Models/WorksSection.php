<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorksSection extends Model
{
    use HasFactory;
    protected $table = 'works_section'; // Specify the correct table name

    protected $fillable = ['title', 'description', 'work_id'];

    public function work()
    {
        return $this->belongsTo(Works::class, 'work_id');
    }
}
