@extends('layouts.default')

@section('title', '編集画面')

@section('content')

<div class="container">

    <h1>編集画面</h1>

    {{ Form::open(['route' => ['posts.update', $post->id], 'method' => 'put']) }}
        @include('posts._form')
        <div>{{ Form::submit('更新') }}</div>
    {{ Form::close() }}
</div>

<div>{{ link_to_route('posts.index', '一覧へ戻る')}}</div>

@endsection
