<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>詳細画面</title>
</head>
<body>
<p>タイトル：<br>{{ $post->title }}<br></p>
<p>記事内容：<br>{{ $post->content }}</p>
<br>
{{ link_to_route('posts.index', '一覧へ戻る')}}
</body>
</html>
