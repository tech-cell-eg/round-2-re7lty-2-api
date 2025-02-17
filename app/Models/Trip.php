<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Trip extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'coast',
        'image',
        'number_of_days',
    ];
}
