<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>詳細画面</title>
</head>
<body>
    登録番号 {{ $post->id }} 番<br>
    <p>タイトル：<br>{{ $post->title }}</p>
    <p>記事内容：<br>{{ $post->content }}</p>
    {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'name' => 'delete_' . $post->id, 'style' => 'display:inline;']) }}
        {{ Form::submit('削除') }}
    {{ Form::close() }}
    <div>{{ link_to_route('posts.index', '一覧へ戻る')}}</div>
</body>
</html>
