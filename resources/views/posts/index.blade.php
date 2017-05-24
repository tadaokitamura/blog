<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>一覧表示</title>
</head>
<body>
<!-- メッセージを表示 -->
@if(Session::has('status'))
    <div>{{ session('status') }}</div>
@endif
<!-- メッセージを表示 -->
<div>一覧表示 {{count($posts)}} 件</div>

<!-- 検索 -->
{{ Form::open(['route' => ['posts.search']]) }}
    {{ Form::text('keyword') }}
    {{ Form::submit('検索') }}
{{ Form::close() }}
<!-- 検索 -->

<!-- 一覧表示 -->
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
<!-- 一覧表示 -->

<div>
    {{ link_to_route('posts.create', '新規登録')}}
    {{ link_to_route('posts.index', '再読み込み')}}
</div>
</body>
</html>
