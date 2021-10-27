<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Topic;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\Comment;
use App\Models\CommentLike;

use Illuminate\Http\Request;
use DB;
class CategoriesController extends Controller
{
    public function store(request $request){
        $input = $request->all();
        DB::table('categories')->insert([
            'name' => $input['name'],
            'description' => $input['description']
        ]);
        
        return redirect()->back();
    }
    public function show($id){
        $category = Category::find($id)->first();
        return view('admin.categories.show', compact('category'));

    }
    public function edit($id){
        $category = Category::find($id)->first();
        return view('admin.categories.edit', compact('category'));
    }
    public function update(request $request, $id){
        $input = $request->except('_method', '_token') ;
        Category::find($id)->update($input);
        return redirect()->route('admin.index');

    }
    public function destroy($id){
        $category = Category::find($id)->first();
        $topics = Topic::where('id', $category->id)->get()->all();
        foreach($topics as $topic)
        {
            $posts = Post::where('id', $topic->id)->get()->all();
            foreach($posts as $post)
            {
                $comments = Comment::where('id', $post->id)->get()->all();
                $post_likes = PostLike::where('id', $post->id)->get()->all();
                foreach($comments as $comment)
                {
                    $likes_comments = CommentLike::where('id', $comment->id)->get()->all();
                    foreach($likes_comments as $likes_comment)
                    {
                        CommentLike::where('id', $likes_comment->id)->delete();
                    }
                    Comment::where('id', $comment->id)->delete();
                }
                foreach($post_likes as $post_like)
                {
                    PostLike::where('id', $post_like->id)->delete();
                }
                Post::where('id', $post->id)->delete();
            }
            Topic::where('id', $topic->id)->delete();
        }
        Category::where('id', $id)->delete();
        // Categroy::find($id)->first()->delete();
        return redirect()->route('admin.index');
    }
}
