<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class He_Info_Tag extends Model
{
    use HasFactory;
    protected $fillable = ['tag_name'];

    public function He_Info_Articles(){
        return $this->hasMany(He_Info_Article::class);
    }
}
