@extends('layout')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
    <article>
        <h1> {!! $post->title !!}</h1>
        {!! $post->body !!}

    </article>
    <a href="/">Go Back</a>
@endsection
