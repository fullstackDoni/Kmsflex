<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Comment;

class Video extends Model
{
    use HasFactory;

    protected $fillable=['name','description','image','directors','actors','year','country','video','category_id','genres_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function genres(){
        return $this->belongsTo(Genre::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
