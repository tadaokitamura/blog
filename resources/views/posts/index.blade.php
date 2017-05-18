<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>一覧画面です</title>
</head>
<body>
<h1>一覧画面です</h1>
データ、出ました・・・<br><br>

	@foreach ($posts as $post)
			{{$post->id}}, {{$post->title}}, {{$post->content}}, {{$post->create_at}}, {{$post->update_at}}, <br>
	@endforeach

<p>さて、どうやって表の中に入れましょう・・・・？</p>

<table border="1" cellspacing="0" cellpadding="0">
<tr>
	<td>タイトル</td><td>記事内容</td><td>作成時間</td><td>更新時間
	</td>
</tr>
<tr>
	<td>なんちゃてタイトル</td>
	<td>なんちゃって記事</td>
	<td>なんちゃって時間</td>
	<td>なんちゃって時間</td>
</tr>

</table>

</body>
</html>
