<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content', 'user_id', 'topic_id'];
    
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function Topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }
    
    use HasFactory;
}
