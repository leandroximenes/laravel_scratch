<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('post/{post}', function ($slug) {
    if (!file_exists($path = __DIR__ . "/../resources/posts/$slug.html")) {
        // return redirect('/');
        abort(404);
    }

    $post = cache()->remember("posts.{$slug}", now()->addMinutes(20), function () use ($path) {
        var_dump($path);
        return file_get_contents($path);
    });

    return view('post', ['post' => $post]);
})->where('post', '[A-z_\-]+');