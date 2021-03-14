<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $post = Post::all();

        return view('blog.index') -> with(['post' => $post]);
    }

    public function store(Request $request){
        Post::create([
            'id'=>$request->id,
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back();
        // dd($request);
    }
    
}