<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','body'];



     public function per_photogallery(){
        return $this->hasMany(Per_Photogallery::class);
    }

    public function per_videogallery(){
        return $this->hasMany(Per_Videogallery::class);
    }

    public function per_comment(){
        return $this->hasMany(Per_Comment::class);
    }
}
