<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost(){
        return view('user.post');
    }
    public function postPost(Request $request)
    {
        $post = new Post([
            'title'=> $request->input('title'),
            'content'=>$request->input('content')
        ]);
        $post->save();
        return redirect()->route('product.index');
    }
}
