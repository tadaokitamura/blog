<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>一覧表示</title>
</head>
<body>
<p>
一覧表示 {{count($posts)}} 件
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
</p>
<p>
{{ link_to_route('posts.create', '新規登録')}}
</p>
</body>
</html>
