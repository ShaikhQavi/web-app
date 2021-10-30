<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserTopicController extends Controller
{

    public function create(){
        $categories = Category::all();
        return view('user.topics.create', compact('categories'));
    }
}
