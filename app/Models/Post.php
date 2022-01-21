<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    /**
     * Specify the coluns will be use as parameter in route 
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        # hasOne, hasMany, belongsTo, BelognsToMany
        return $this->belongsTo(Category::class);
    }
}
