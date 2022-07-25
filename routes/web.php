<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('post/{post:slug}', function (Post $post) { // The same as Post::where('slug', $post)->fistOrFail(), because Model changed
    return view('post', [
        'post' => $post
    ]);
});
