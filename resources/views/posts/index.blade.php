<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>一覧画面です</title>
</head>
<body>
<h1>一覧画面です</h1>
<p>{{count($posts)}} 件です</p>
		<table border="1" cellspacing="0" cellpadding="1">
			  @foreach ($posts as $post)
				    <tr>
								<td>{{$post->id}}</td>
								<td>{{$post->title}}</td>
								<td>{{$post->content}}</td>
								<td>{{ $post->create_at}}</td>
								<td>{{$post->update_at}}</td>
						</tr>
				@endforeach
		</table>
</body>
</html>
