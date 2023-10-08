<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Non_Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','body'];



     public function non_photogallery(){
        return $this->hasMany(Non_Photogallery::class);
    }

    public function non_videogallery(){
        return $this->hasMany(Non_Videogallery::class);
    }

    public function non_comment(){
        return $this->hasMany(Non_Comment::class);
    }
}
