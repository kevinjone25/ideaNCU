<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
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
            'content'=>$request->input('content'),
            'user_id'=>Auth::id()
        ]);
        $post->save();
        return redirect()->route('blog.index');
    }
 
}
