<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    return view('posts', [
        // 'posts' => Post::all() //Make 4 queries 47ms
        'posts' => Post::with('author', 'category')->get() //Make 2 queries 25ms
        /* --- use clockwork to show --- */

    ]);
});

Route::get('post/{post}', function (Post $post) { //slug is a db column abstrated here used by getRouteKeyName function
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category', 'author'])
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category', 'author'])
    ]);
});
