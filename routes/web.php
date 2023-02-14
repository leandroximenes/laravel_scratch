<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('post/{post}', [PostController::class, 'show']);

Route::get('categories/{category:slug}', function (Category $category) {
    return view('pages/posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::orderBy('name', 'asc')->get(),
    ]);
})->name('category');

Route::get('authors/{author:username}', function (User $author) {
    return view('pages/posts', [
        'posts' => $author->posts,
        'categories' => Category::orderBy('name', 'asc')->get(),
    ]);
});
