<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
        'roll_number',
        'stream',
        'age',
        'enrollment_number',
    ];

    public $timestamps = true;
}
