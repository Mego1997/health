<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res_Info_Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment','artical_id','user_id'];

    public function Res_Info_Article(){
        return $this->belongsTo(Res_Info_Article::class, 'artical_id');
     }

     public function user(){
        return $this->belongsTo(User::class, 'user_id');
     }
}
