<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Per_Comment extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['comment','event_id','user_id'];

    public function per_event(){
        return $this->belongsTo(Per_Event::class, 'event_id');
     }

     public function user(){
        return $this->belongsTo(User::class, 'event_id');
     }
}
