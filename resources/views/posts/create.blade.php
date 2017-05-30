@extends('layouts.default')

@section('title', '新規作成')

@section('content')

<div class="container">
    <h1>新規作成</h1>

    {{ Form::open(['route' => ['posts.store']]) }}
        @include('posts._form')
        <div>{{ Form::submit('登録')}}</div>
    {{ Form::close() }}
</div>

<div>{{ link_to_route('posts.index', '一覧へ戻る')}}</div>

@endsection
