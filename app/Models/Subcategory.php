<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = [
        'category',
        'photo',
        'title',
    ];
=======
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
>>>>>>> c5b7ee35f7187edf8e8bf1db70752554ac336c1c
}
