<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>詳細画面</title>
</head>
<body>
登録番号 {{ $post->id }} 番<br>
<p>タイトル：<br>{{ $post->title }}<br></p>
<br>
<p>記事内容：<br>{{ $post->content }}</p>
<br>

<p>
    {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'name' => 'delete_' . $post->id])}}
        {{ Form::submit('削除') }}
    {{ Form::close() }}
</p>

{{ link_to_route('posts.index', '一覧へ戻る')}}
</p>
</body>
</html>
