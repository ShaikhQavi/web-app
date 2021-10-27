<?php

namespace App\Http\Controllers;
use App\Models\Topic;
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
}
