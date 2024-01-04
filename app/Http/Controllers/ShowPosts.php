<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ShowPosts extends Controller
{
    public function main(){
        return view('main')->with('posts', Post::getPosts());
    }
}
