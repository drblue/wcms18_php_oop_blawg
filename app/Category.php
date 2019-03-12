<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function categories() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
