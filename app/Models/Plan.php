<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'price',
        'description',
        'features',
    ];
    protected $casts = [
        'features' => 'array',
    ];
    
}
