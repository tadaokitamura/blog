<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>一覧表示</title>
</head>
<body>

<!-- フラッシュメッセージを表示 -->
@if(Session::has('status'))
    <div>{{ session('status') }}</div>
@endif
<!-- フラッシュメッセージを表示 -->

<!-- 一覧表示タイトル -->
<div>一覧表示（ {{count($posts)}}）件</div>
<!-- 一覧表示タイトル -->

<!-- 検索 -->
<div>
{{ Form::open(['route' => ['posts.search']]) }}
    <div>検索文字：{{ Form::text('keyword') }}</div>
    <div>投稿日　：{{ Form::text('date_start') }} 〜 {{ Form::text('date_end') }}</div>
    <div>{{ Form::submit('検索') }}</div>
{{ Form::close() }}
</div>
<!-- 検索 -->

<!-- 画面繊維部 -->
<div>
    {{ link_to_route('posts.create', '新規登録')}}
    {{ link_to_route('posts.index', '再読み込み')}}
</div>
<!-- 画面繊維部 -->

<!-- 投稿の一覧表示 -->
<ul>
    @forelse ($posts as $post)
        <li>
            {{ link_to_route('posts.show', $post->title, [$post->id]) }}
            {{ link_to_route('posts.edit', ' ( 編集 )', [$post->id]) }}
        </li>
    @empty
        登録がありません
    @endforelse
</ul>
<!-- 投稿の一覧表示 -->

</body>
</html>
