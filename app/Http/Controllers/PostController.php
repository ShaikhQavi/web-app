<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function store(request $request){
        $input = $request->all();
        Post::create([
            'content' => $input['content'],
            'topic_id' => $input['topic_id'],
            'user_id' => Auth::id()
        ]);
        return redirect()->back();
    }
}
