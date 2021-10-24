<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    public $table = "likes_comment";
    protected $fillable = ['status', 'user_id', 'comment_id'];

    public function comment()
    {
        $this->belongsTo(Comment::class, 'comment_id');
    }
    use HasFactory;
}
