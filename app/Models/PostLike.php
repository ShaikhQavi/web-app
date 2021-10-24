<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    public $table="likes_post";
    protected $fillable = ['status', 'user_id', 'post_id'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    use HasFactory;
}
