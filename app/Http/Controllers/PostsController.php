<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [ "posts" => $posts ]);
    }


    // public function show($id)
    // {
    //     $post = Post::findOrFail($id);
    //     return view('posts.show')->with('post', $post);
    // }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }


    public function create()
    {
      return view('posts.create');
    }

    public function update()
    {
      //return view('posts.update');
    }

    public function delete()
    {
      //return view('posts.delete');
    }

}
