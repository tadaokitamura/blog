@extends('layouts.app')

@section('app')

<h1>posts.index</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>

@endsection

