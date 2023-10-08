<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class He_Info_Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment','artical_id','user_id'];

    public function He_Info_Article(){
        return $this->belongsTo(He_Info_Article::class, 'artical_id');
     }

     public function user(){
        return $this->belongsTo(User::class, 'user_id');
     }
}
