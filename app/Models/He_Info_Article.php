<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class He_Info_Article extends Model
{
    use HasFactory;
    protected $fillable = ['article_name','article_body','article_image','cat_id','tag_id','doc_id'];

    public function He_Info_Category(){
        return $this->belongsTo(He_Info_Category::class, 'cat_id');
     }

     public function He_Info_Tag(){
        return $this->belongsTo(He_Info_Tag::class, 'tag_id');
     }
     public function doctor(){
        return $this->belongsTo(Doctor::class, 'doc_id');
     }
     public function He_Info_Comment(){
      return $this->hasMany(He_Info_Comment::class);
  }
}
