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

    //一覧画面
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // 詳細画面
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    // 新規作成画面
    public function create()
    {
        $post = new Post();
        return view('posts.create', compact('post'));
    }

    // 新規作成データを追加
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
    }

    // 更新（編集）画面
    public function edit($post) {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    // 編集内容でデータベースを更新
    public function update(Request $request, $post)
    {
        $post = Post::find($post);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    // 選択されたidのデータを削除
    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');
    }

}
