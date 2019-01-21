<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
use App\Comment;

class Comment extends Model
{
    public function blog()
    {
       return $this->belongsTo(Blog::class);
    }
}
