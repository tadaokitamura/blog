<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>編集画面</title>
</head>
<body>
編集画面
{{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) }}
    <div>
        記事タイトル：<br>
        {{ Form::text('title', $post->title) }}
    </div>
    <div>
        記事内容：<br>
        {{ Form::textarea('content', $post->content) }}
    </div>
    <div>
    {{ Form::submit('更新') }}
    </div>
{{ Form::close() }}
{{ link_to_route('posts.index', '一覧へ戻る')}}
</body>
</html>
