<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Res_Info_Tag extends Model
{
    use HasFactory;
    protected $fillable = ['tag_name'];

    public function Res_Info_Articles(){
        return $this->hasMany(Res_Info_Article::class);
    }
}
