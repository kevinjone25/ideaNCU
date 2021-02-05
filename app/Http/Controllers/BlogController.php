<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getIndex(){
        $posts = Post::all();
        return view('shop.index', ['posts' => $posts]);
}
}
