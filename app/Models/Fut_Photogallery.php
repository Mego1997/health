<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fut_Photogallery extends Model
{
    use HasFactory;
    protected $fillable = ['image','event_id'];

    public function fut_event(){
        return $this->belongsTo(Fut_Event::class, 'event_id');
     }

}
