<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_Category extends Model
{
    use HasFactory;
    protected $fillable = ['cat_name','cat_image'];

    public function Videos(){
        return $this->hasMany(Video::class);
    }
}
