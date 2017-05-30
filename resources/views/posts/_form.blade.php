<div>
    記事タイトル：<br>
    {{ Form::text('title', $post->title) }}
</div>
<div>
    記事内容：<br>
    {{ Form::textarea('content', $post->content) }}
</div>
