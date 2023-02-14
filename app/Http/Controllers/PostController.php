<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('pages/posts', [
            'posts' => Post::latest('publish_at')->myfilter()->get(),
            'categories' => Category::orderBy('name', 'asc')->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('pages/post', [
            'post' => $post
        ]);
    }
}
