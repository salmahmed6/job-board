<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = "post";
    protected $fillable = [
        "title",
        "body",
        "published_at",
    ]; 

    protected $guarded = [
        "id"
    ];  

      public function comments() {
        return $this->hasMany(Comment::class);
    }
}


