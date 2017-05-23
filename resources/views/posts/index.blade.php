<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>一覧表示</title>
</head>
<body>
    @if(Session::has('status'))
        <div>{{ session('status') }}</div>
    @endif
    <div>一覧表示 {{count($posts)}} 件</div>
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
    {{ link_to_route('posts.create', '新規登録')}}
</body>
</html>
