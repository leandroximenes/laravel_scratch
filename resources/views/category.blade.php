@extends('layout')

@section('title')
    {{ $category->title }}
@endsection

@section('content')
    <article>
        <h1> {!! $category->name !!}</h1>
    </article>
    <a href="/">Go Back</a>
@endsection
