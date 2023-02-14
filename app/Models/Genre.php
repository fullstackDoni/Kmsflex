<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable=['gname'];
    use HasFactory;
    public function videos(){
        return $this->hasMany(Video::class);
    }
    public function category(){
        return $this->hasMany(Category::class);
    }
}
