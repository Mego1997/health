<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Videogallery extends Model
{
    use HasFactory;
    protected $fillable = ['video','event_id'];

    public function per_event(){
        return $this->belongsTo(Per_Event::class, 'event_id');
     }
}
