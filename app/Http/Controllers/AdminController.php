<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Topic;

class AdminController extends Controller
{

    public function index(){
        $categories = Category::all();
        $topics = Topic::all();

        return view('admin.home', compact(['categories','topics']));
    }
}
