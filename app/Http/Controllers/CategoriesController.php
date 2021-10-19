<?php

namespace App\Http\Controllers;

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
}
