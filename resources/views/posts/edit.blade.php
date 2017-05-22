<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>編集画面</title>
</head>
<body>

    {{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) }}
        <div>
            <p>記事タイトル：<br>
            {{ Form::text('title', $post->title) }}
        </div>

        <div>
            <p>記事内容：<br>
            {{ Form::textarea('content', $post->content) }}
        </div>

        {{ Form::submit('更新') }}
    {{ Form::close() }}
<p>
    {{ link_to_route('posts.index', '一覧へ戻る')}}
</p>
</body>
</html>
