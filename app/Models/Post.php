<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        return  cache()->remember("posts.{$slug}", now()->addMinutes(20), function () use ($slug) {
            $posts = static::all(); //colection
            return $posts->firstWhere('slug', $slug);
        });
    }

    public static function all()
    {
        $files = File::files(resource_path("posts"));

        return collect($files)->map(function ($file) {
            $document = YamlFrontMatter::parse($file->getContents());
            return new Post($document->title, $document->excerpt, $document->data, $document->body(), $document->slug);
        })->sortByDesc('date');
    }
}
