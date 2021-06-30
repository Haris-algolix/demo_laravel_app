<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        // dd(Post::all());

        // method one
        return view('posts.index', compact('posts'));
        //method two
        // return view('posts.index', ['posts' => $posts]);
        //method three
        // $data['posts'] = $posts;
        // return view('posts.index', $data);
    }
    public function edit(Post $post){
        $data['post']  = $post;
        return view('posts.edit' ,$data);
    }


    public function update(Post $post){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $data['title'] = request('title');
        $data['content'] = request('content');
        $post->update($data);
        return redirect('/posts');

    }

    public function create(){
        return view('posts.insert');
    }

    public function store(){
        // show(request()->all());
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        // show(request()->all());
        $data['title'] = request('title');
        $data['content'] = request('content');
        POST::create($data);
        return redirect('/posts');
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');
    }
}
