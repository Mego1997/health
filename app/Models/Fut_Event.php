<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fut_Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','body'];



    public function fut_photogallery(){
       return $this->hasMany(Fut_Photogallery::class);
   }

   public function fut_videogallery(){
       return $this->hasMany(Fut_Videogallery::class);
   }

   public function fut_comment(){
       return $this->hasMany(Fut_Comment::class);
   }
}
