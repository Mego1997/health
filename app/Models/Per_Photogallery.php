<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Photogallery extends Model
{
    use HasFactory;
    protected $fillable = ['image','event_id'];

    public function per_event(){
        return $this->belongsTo(Per_Event::class, 'event_id');
     }


}
