<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //with this, don't need put this: 
    //  Post::latest('publish_at')->with('category', 'author')->get() or
    //  $author->posts->load(['category', 'author'])
    // anymore. And the oposite is:
    //  Post::latest('publish_at')->without('category', 'author')->get()
    protected $with = ['category', 'author'];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category() // Laravel assume foreing key is category_id
    {
        return $this->belongsTo(Category::class);
    }

    public function author() // Change default user to author
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
