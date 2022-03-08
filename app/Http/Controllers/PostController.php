<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post){
        return view('home',['posts'=>$post->paginate()]);
    }

    public function search(Request $request){
        $query = $request->q;
        return view('home',['posts'=>Post::search($query)->paginate()]);
    }
}
