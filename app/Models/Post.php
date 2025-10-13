<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title",
        "body",
        "published_at",
    ];  // can be updated/ assigned

    protected $guarded = [
        "id",
        "created_at",
        "updated_at",
    ];   // cannot be updated/ assigned
}
