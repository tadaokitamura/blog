<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use App\Post;
use DB;
use DateTime;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //一覧画面
    public function index()
    {

        $posts = Post::all();
        // $posts = Post::Paginate(5);
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
        // dd($request);

        $this->validate($request, [
            'title' => 'required|min:3|max:30',
            'content' => 'required|max:255'
        ]);
        $post = Post::create($request->all());
        return redirect()->route('posts.index')->with(
            'status', $post->id . '番目の記事を投稿しました'
        );
    }

    // 更新（編集）画面
    public function edit($post) {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    // 編集内容でデータベースを更新
    public function update(Request $request, $post)
    {
        // dd($request->title);
        // dd($request->content);

        $this->validate($request, [
            'title' => 'required|min:3|max:30',
            'content' => 'required|max:255'
        ]);
        $post = Post::find($post);
        $post->update($request->all());
        return redirect()->route('posts.index')->with(
            'status', $post->id . '番目の記事を更新しました'
        );
    }

    // 選択されたidのデータを削除
    public function destroy($id)
    {
        // dd($id);

        Post::destroy($id);
        return redirect()->route('posts.index')->with(
            'status', $id . '番目の記事を削除しました'
        );
    }

        public function search(Request $request)
        {

            $attributes = $request->only(['keyword', 'date_start', 'date_end']);
            $blogsearch = Post::blogsearch($attributes);
            // dd($blogsearch);
            $posts = $blogsearch;

            return view('posts.index', compact('posts'));

        }

}
