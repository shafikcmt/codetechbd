<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whattodo extends Model
{
    use HasFactory;
    protected $fillable = [
        'font',
        'title',
        'description',
        'status',
    ];
}
