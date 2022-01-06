<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('post/{post}', function ($slug) {

    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');
