<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>一覧画面</title>
</head>
<body>
一覧表示 {{count($posts)}} 件

  <ul>
    @forelse ($posts as $post)
		<li>{{ link_to_route('posts.show', $post->title, [$post->id]) }}</li>
    @empty
    	<li>登録がありません</li>
    @endforelse
  </ul>

</body>
</html>
