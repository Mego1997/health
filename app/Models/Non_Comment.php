<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Non_Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment','event_id','user_id'];

    public function non_event(){
        return $this->belongsTo(Non_Event::class, 'event_id');
     }

     public function user(){
        return $this->belongsTo(User::class, 'event_id');
     }
}
