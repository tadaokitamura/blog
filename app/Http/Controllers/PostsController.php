<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    //protected $posts;
    //public function __construct(Post $article)
    //{
    //  $this->posts = $posts;
    //}

    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('./posts/index', [ "posts" => $posts ]);
    }


    public function detail()
    {
      //return view('detail');
    }

    public function create()
    {
      //return view('create');
    }

    public function update()
    {
      //return view('update');
    }

    public function delete()
    {
      //return view('delete');
    }

}
