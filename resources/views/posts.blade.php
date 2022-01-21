@extends('layout')

@section('title')
    Posts
@endsection

@section('content')
    @foreach ($posts as $key => $post)
        <article>
            <a href="/post/{{ $post->slug }}">
                <h1>{!! $post->title !!}</h1>{{-- compiler html --}}
            </a>
            <p>
                Category: <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                Excerpt: {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
