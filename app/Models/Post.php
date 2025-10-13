<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Post extends Model
{

    use HasUuids;

    protected $primaryKey = "id";
    protected $keyType = "string"; //UUID -> Universal Unique Identifier
    public $incrementing = false;

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

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}


