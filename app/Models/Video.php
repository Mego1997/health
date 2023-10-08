<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['vid_name','vid_image','vid_url','vid_description','cat_id'];

    public function video_categories(){
        return $this->belongsTo(Video_Category::class, 'cat_id');
     }

     public function video_comment(){
        return $this->hasMany(Video_Comment::class);
    }
}
