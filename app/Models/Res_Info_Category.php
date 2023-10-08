<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res_Info_Category extends Model
{
    use HasFactory;
    protected $fillable = [
     'cat_name',
     'cat_image',
    ];

    public function Res_Info_Articles(){
        return $this->hasMany(Res_Info_Article::class);
    }
}
