<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    /**
     * Listen db and put in logger
     * */
    // DB::listen(function ($query) {
    //     logger($query->sql);
    // });

    return view('posts', [
        // Old way
        //'posts' => Post::all()
        // best way
        'posts' => Post::with('category')->get()

    ]);
});

Route::get('post/{post}', function (Post $post) { // The same as post:{post:slug} because add getRouteKeyName() in Post Model
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('users/{user:id}', function (User $user) {
    return view('posts', [
        'posts' => $user->posts
    ]);
});
