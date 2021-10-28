<?php

namespace App\Http\Controllers;
use App\Models\Topic;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class TopicController extends Controller
{
    public function index(){

    }
    public function store(request $request){
        $input = $request->except('_token');
        $input['user_id'] = Auth::id();
        Topic::create($input);
        return redirect()->back();
    }
    public function show($id){
        $topic = Topic::find($id);
        return view('admin.topics.show', compact('topic'));

    }
    public function edit($id){
        $categories = Category::all();
        $topic = Topic::find($id);
        return view('admin.topics.edit', compact(['topic','categories']));
    }
    public function update(request $request, $id){
        $input = $request->except('_method', '_token') ;
        Topic::find($id)->update($input);
        return redirect()->route('admin.index');

    }
    public function destroy($id){
        Topic::find($id)->first()->delete();
        return redirect()->route('admin.index');
    }
}
