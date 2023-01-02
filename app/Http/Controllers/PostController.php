<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class PostController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    
    public function index(){

        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('post.index', ['posts' => $posts]);
    }
    
    public function show(Post $post){

        return view('post.post',['post' =>$post]);

    }

    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'post_text' => 'required',
            'post_thumbnail' =>'required'
        ]);


        $post = new Post;

        $filename = time() . '.' . $request->post_thumbnail->extension();

        $request->post_thumbnail->move(public_path('uploads'), $filename);
        

        $post->title = $request->title;
        $post->author = $request->author;
        $post->post_text = $request->post_text;
        $post->thumbnail_img= $filename;
        
        $post->save();

        Session::flash('success', 'Post updated.');

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }


    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'post_text' => 'required'
        ]);


        $post->fill($request->post())->save();

        Session::flash('success', 'Post updated.');


        return redirect()->route('posts.show', $post)->with('success','Post Has Been updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post has been deleted successfully');
    }

}

