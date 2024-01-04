<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPosts extends Controller
{
    public function index(){
        return view('admin/admin');
    }
     public function store(Request $request){
         $newPost = new Post;
         $newPost->title = $request -> input('title');
         $newPost->short_description = $request -> input('short_description');
         $newPost->body = $request -> input('body');
         $newPost -> save();
         return redirect('/posts');
     }
}
