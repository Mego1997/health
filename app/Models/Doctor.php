<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'doc_name',
        'doc_image',
        'doc_spec',
        'doc_address',
        'doc_phone',
        'doc_mail',
        'doc_summary',
        'doc_exp',
        'doc_skills',
        'doc_edu',
    ];
    public function He_Info_Articles(){
        return $this->hasMany(He_Info_Article::class);
    }

    public function Res_Info_Articles(){
        return $this->hasMany(Res_Info_Article::class);
    }
}
