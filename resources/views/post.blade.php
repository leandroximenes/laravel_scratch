@extends('layout')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <article>
        <h1> {!! $post->title !!}</h1>
        By {{ $post->user->name }} <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        <br />
        {!! $post->body !!}

    </article>
    <a href="/">Go Back</a>
@endsection
