<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Non_Videogallery extends Model
{
    use HasFactory;
    protected $fillable = ['video','event_id'];

    public function non_event(){
        return $this->belongsTo(Non_Event::class, 'event_id');
     }
}
