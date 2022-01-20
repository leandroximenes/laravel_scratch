<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('post/{post}', function (Post $post) { //slug is a db column abstrated here used by getRouteKeyName function
    return view('post', [
        'post' => $post
    ]);
});
