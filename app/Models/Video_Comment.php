<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video_Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment','vid_id','user_id'];

    public function video(){
        return $this->belongsTo(Video::class, 'vid_id');
     }

     public function user(){
        return $this->belongsTo(User::class, 'user_id');
     }
}
