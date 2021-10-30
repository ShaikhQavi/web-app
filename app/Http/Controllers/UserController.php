<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Post;

class UserController extends Controller
{
    public function index()
    {
        $topics = Topic::get()->all();
        return view('user.home', compact('topics'));
    }
    public function getTopicPosts($id){
        $topic_id = $id;
        $posts = Post::where('topic_id', $id)->get()->all();
        return view('user.posts.post', compact('posts','topic_id'));

    }
}
