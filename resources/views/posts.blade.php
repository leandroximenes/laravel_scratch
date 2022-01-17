@extends('layout')

@section('title')
    Posts
@endsection

@section('content')
    @foreach ($posts as $key => $post)
        <article>
            <a href="post/{{ $post->id }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
