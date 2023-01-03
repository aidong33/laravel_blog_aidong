<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HoempageController extends Controller
{
    public function getPosts(){

        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('index', ['posts' => $posts]);
    }
    public function show(Post $post){

        return view('singlepost',['post' =>$post]);

    }
}
