<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

Route::get('/', function () {
    /**
     * Listen db and put in logger
     * */
    // Illuminate\Support\Facades\DB::listen(function ($query) {
    //     logger($query->sql);
    // });

    return view('pages/posts', [
        // Old way
        //'posts' => Post::all()
        // best way
        'posts' => Post::latest('publish_at')->get(),
        'categories' => Category::orderBy('name', 'asc')->get(),
    ]);
});

Route::get('post/{post}', function (Post $post) { // The same as post:{post:slug} because add getRouteKeyName() in Post Model
    return view('pages/post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('pages/posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::orderBy('name', 'asc')->get(),
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('pages/posts', [
        'posts' => $author->posts,
        'currentCategory' => $author->posts->categories,
        'categories' => Category::orderBy('name', 'asc')->get(),
    ]);
});
