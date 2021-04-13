<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postcontroller extends Controller
{
    public function index() {
        $post = Post::all();

        return view('post.index')->with(['post' =>$post]);

    }
    public function store(Request $request){
        Post::create([
        'title' =>$request->title,
        'body' =>$request->body
        ]);
        return back();
    }
    public function get_post($id) {
        $post = Post::find($id);

        if($post == null)
            return response(404);

        return view('post.detail')->with (['post' => $post]);


    }
}
