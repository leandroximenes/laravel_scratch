@extends('layout')

@section('title')
    {{ strip_tags($post->title) }}
@endsection

@section('content')
    <article>
        <h1> {!! $post->title !!}</h1>
        By {{ $post->author->name }} <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        <br />
        {!! $post->body !!}

    </article>
    <a href="/">Go Back</a>
@endsection
