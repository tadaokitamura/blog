<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>新規作成画面</title>
</head>
<body>
新規作成
{{ Form::open(['route' => ['posts.store']]) }}
    <div>
        タイトル：<br>
        {{ Form::text('title', $post->title) }}
    </div>
    <div>
        記事内容：<br>
        {{ Form::textarea('content', $post->content) }}
    </div>
    <div>
        {{ Form::submit('登録')}}
    </div>
{{ Form::close() }}
{{ link_to_route('posts.index', '一覧へ戻る')}}
</body>
</html>
