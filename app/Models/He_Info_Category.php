<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class He_Info_Category extends Model
{
    use HasFactory;
    protected $fillable = [
     'cat_name',
     'cat_image',
    ];

    public function He_Info_Articles(){
        return $this->hasMany(He_Info_Article::class);
    }
}
