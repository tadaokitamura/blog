@extends('layouts.default')

@section('title', '詳細表示')

@section('content')

<div class="container">

    <h1>詳細画面</h1>

    <!-- 登録番号の表示 -->
    <div>登録番号 {{ $post->id }} 番</div><br>

    <div>
        <div>投稿日：{{ $post->created_at->format('Y年m月d日 H時i分s秒') }}</div>
        <div>更新日：{{ $post->updated_at->format('Y年m月d日 H時i分s秒') }}</div>
    </div>

    <div>
        <div>
            記事タイトル：<br>
            {{ Form::text('title', $post->title) }}
        </div>
        <div>
            記事内容：<br>
            {{ Form::textarea('content', $post->content) }}
        </div>
    </div>

    <div>
        {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'name' => 'delete_' . $post->id, 'style' => 'display:inline;']) }}
            {{ Form::submit('削除') }}
        {{ Form::close() }}
    </div>
</div>

<div>{{ link_to_route('posts.index', '一覧へ戻る')}}</div>

@endsection
