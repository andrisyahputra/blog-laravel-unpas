<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        $data['posts'] = Post::all();
        $data['title'] = "Blog";
        return view('blog', $data);
    }
    public function show($slug){
        $data['post'] = Post::find($slug);
        $data['title'] = "Post";
    return view('post', $data);
    }
}
