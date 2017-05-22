<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use DB;
use DateTime;


class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', [ "posts" => $posts ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::table('posts')->insert([
            'title' => $data['title'],
            'content' => $data['content'],
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        return redirect()->route('posts.index');
    }


    // 画面だけ
    public function edit($post)
    // public function edit($id)
    {
        $post = Post::findOrFail($post);
        // $id = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    //実際の処理
    public function update(Request $request, $post)
    {
        $post = Post::findOrFail($post);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }

}
