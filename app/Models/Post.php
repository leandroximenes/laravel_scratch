<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

class Post extends Model implements AuditableContract
{
    use HasFactory;

    use Auditable;

    protected $with = ['category', 'author'];

    /**
     * Specify the coluns will be use as parameter in route 
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category() //Automatically refresh category_id
    {
        # hasOne, hasMany, belongsTo, BelognsToMany
        return $this->belongsTo(Category::class);
    }

    public function author() //user_id
    {
        # hasOne, hasMany, belongsTo, BelognsToMany
        return $this->belongsTo(User::class, 'user_id');
    }
}
