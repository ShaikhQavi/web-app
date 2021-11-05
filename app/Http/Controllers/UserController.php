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
        $posts = Topic::find($id)->posts;
        return view('user.posts.post', compact('posts','topic_id'));

    }
    public function getTopicPostsApi($topic_id){
        $posts = Post::where('topic_id', $topic_id)->with(array('user' => function($query) {
            $query->select('id','name');
            return $query;
        }))->with(array('topic' => function($query) {
            $query->select('id','title');
            return $query;
        }))->get()->toArray();
        return $posts;
    }
}
