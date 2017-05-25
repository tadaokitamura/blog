<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>詳細画面</title>
</head>
<body>

<!-- 登録番号の表示 -->
<div>登録番号 {{ $post->id }} 番</div><br>
<!-- 登録番号の表示 -->

<div>
    <div>タイトル：<br>{{ $post->title }}</div><br>
    <div>記事内容：<br>{{ $post->content }}</div><br>
    <div>投稿日：{{ $post->created_at->format('Y年m月d日 H時i分s秒') }}</div>
    <div>更新日：{{ $post->updated_at->format('Y年m月d日 H時i分s秒') }}</div>
</div>

<div>
    {{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'name' => 'delete_' . $post->id, 'style' => 'display:inline;']) }}
        {{ Form::submit('削除') }}
    {{ Form::close() }}
</div>

<div>{{ link_to_route('posts.index', '一覧へ戻る')}}</div>

</body>
</html>
